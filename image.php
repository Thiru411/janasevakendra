<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Upload HTML & Images to Generate PNG</title>
  <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }
    #preview-container {
      position: relative;
      border: 1px solid #ccc;
      margin-top: 20px;
      overflow: hidden;
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center center;
      width: 100%;
      height: 100%;
      padding-top: 100px;
    }
    #preview {
      position: absolute;
      width: 100%;
      height: 100%;
      background: transparent;
    }
    .tblRCard {
      position: absolute;
      top: 60px;
      left: 30px;
      width: 90%;
      background-color: rgba(255, 255, 255, 0.9);
      padding: 30px;
      border-radius: 8px;
      box-shadow: 2px 2px 15px rgba(0,0,0,0.3);
      display: none;
    }
    img {
      max-width: 100%;
      height: auto;
    }
    /* Govt Logo - Remove Background */
    .govtlogo {
      mix-blend-mode: multiply; /* Removes white backgrounds */
      filter: brightness(0) invert(1); /* Make it more visible on dark backgrounds */
    }
    button {
      padding: 15px 30px;
      margin-top: 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
      border-radius: 5px;
      font-size: 16px;
    }
    button:hover {
      background-color: #45a049;
    }
    /* Move the family member text down */
    #familyMembersText {
      margin-top: 120px;
    }
    /* Set the required text to white */
    .makeWhite {
      color: white !important;
    }
  </style>
</head>
<body>
  <h1>Upload HTML and Images</h1>
  <p>Select an HTML file and its images folder, then click "Generate PNG".</p>

  <label for="htmlInput">HTML File:</label>
  <input type="file" id="htmlInput" accept=".html">
  <br><br>

  <label for="folderInput">Images Folder:</label>
  <input type="file" id="folderInput" webkitdirectory directory multiple>
  <br><br>

  <label for="imageInput">Reference Image (Background):</label>
  <input type="file" id="imageInput" accept="image/*">
  <br><br>

  <button id="submitBtn">Generate PNG</button>

  <!-- Kannada & English Department Text (Keep Original Colors) -->
  <h2 id="lblDepartmentKan">ಆಹಾರ, ನಾಗರಿಕ ಸರಬರಾಜು ಮತ್ತು ಗ್ರಾಹಕರ ವ್ಯವಹಾರಗಳ ಇಲಾಖೆ</h2>
  <h3 id="lblDepartmentEng">Food, Civil Supplies and Consumer Affairs Department</h3>

  <p id="familyMembersText">ಸದಸ್ಯರ ಸಂಖ್ಯೆ Family Members : 6</p>

  <!-- Text that needs to be white -->
  <h2 class="makeWhite">208919424</h2>
  <h3 class="makeWhite">ಆದ್ಯತಾ ಕುಟುಂಬ ಸೀಮೆಎಣ್ಣೆಗೆ ಅನರ್ಹ</h3>
  <h3 class="makeWhite">Priority Household Not Eligible for Kerosene</h3>
  <h3 class="makeWhite">ಕರ್ನಾಟಕ ಸರ್ಕಾರ</h3>
  <h3 class="makeWhite">GOVERNMENT OF KARNATAKA</h3>

  <div id="preview-container">
    <div id="preview"></div>
    <div class="tblRCard"></div>
  </div>

  <script>
    const htmlInput = document.getElementById('htmlInput');
    const folderInput = document.getElementById('folderInput');
    const imageInput = document.getElementById('imageInput');
    const submitBtn = document.getElementById('submitBtn');
    const previewContainer = document.getElementById('preview-container');
    const preview = document.getElementById('preview');

    submitBtn.addEventListener('click', () => {
      if (!htmlInput.files[0]) {
        alert('Please select an HTML file.');
        return;
      }
      if (folderInput.files.length === 0) {
        alert('Please select the images folder.');
        return;
      }

      // Load and set the reference image as background
      if (imageInput.files[0]) {
        const imgURL = URL.createObjectURL(imageInput.files[0]);
        const img = new Image();
        img.src = imgURL;
        img.onload = () => {
          previewContainer.style.width = img.width + "px";
          previewContainer.style.height = img.height + "px";
          previewContainer.style.backgroundImage = `url('${imgURL}')`;
        };
      }

      // Build a mapping of file paths to blob URLs
      const fileMapping = {};
      for (const file of folderInput.files) {
        const relativePath = file.webkitRelativePath;
        fileMapping[relativePath] = URL.createObjectURL(file);
        fileMapping[file.name] = URL.createObjectURL(file);
      }

      // Read the HTML file
      const reader = new FileReader();
      reader.onload = function(e) {
        const htmlText = e.target.result;
        const parser = new DOMParser();
        const doc = parser.parseFromString(htmlText, 'text/html');

        // Update <img> tags with correct paths
        const imgs = doc.getElementsByTagName('img');
        for (let img of imgs) {
          let src = img.getAttribute('src');
          if (!src) continue;
          if (src.startsWith('./')) src = src.substring(2);
          if (fileMapping[src]) {
            img.setAttribute('src', fileMapping[src]);
          } else {
            const fileName = src.split('/').pop();
            if (fileMapping[fileName]) {
              img.setAttribute('src', fileMapping[fileName]);
            }
          }
          // Apply class to remove background if it's the govt logo
          if (img.src.includes("govtlogo")) {
            img.classList.add("govtlogo");
          }
        }

        // Remove watermark if exists
        const watermark = doc.getElementById('Img1');
        if (watermark) watermark.remove();

        // Insert modified HTML into preview container
        preview.innerHTML = "";
        while (doc.body.firstChild) {
          preview.appendChild(doc.body.firstChild);
        }

        // Convert specific text to white
        document.querySelectorAll(".makeWhite").forEach(el => {
          el.style.color = "white";
        });

        // Wait for images to load before capturing as PNG
        Promise.all([...preview.getElementsByTagName('img')].map(img => 
          new Promise(resolve => {
            if (img.complete) resolve();
            img.onload = resolve;
            img.onerror = resolve;
          })
        )).then(() => {
          setTimeout(() => {
            html2canvas(previewContainer, {
              scale: 2,  
              allowTaint: false,
              useCORS: true
            }).then(canvas => {
              const imgData = canvas.toDataURL("image/png");
              const link = document.createElement('a');
              link.download = 'converted.png';
              link.href = imgData;
              link.click();
            }).catch(err => {
              console.error('Error generating PNG:', err);
            });
          }, 1000);
        });
      };
      reader.readAsText(htmlInput.files[0]);
    });
  </script>
</body>
</html>
