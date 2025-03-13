<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload HTML & Generate PNG</title>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            text-align: center;
        }
        #preview-container {
            position: relative;
            border: 1px solid #ccc;
            margin-top: 20px;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: top center;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            overflow: hidden;
            width: 100%;
            max-width: 900px;
            min-height: 500px;
            margin-left: auto;
            margin-right: auto;
        }
        #preview-wrapper {
            padding: 0;
            margin: 0;
            width: 100%;
            display: flex;
            justify-content: center;
        }
        #preview {
            position: relative;
            width: 100%;
            background: transparent;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: -450px;
        }
        img {
            max-width: 100%;
            height: auto;
        }
        button {
            padding: 10px 20px;
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
        #Table1 {
            margin-top: 34px;
        }
        .table-5 {
            margin-left: -60px;
            margin-left: -48px;
        }
        #lblAckNo {
            color: white;
            padding: 0px;
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Upload HTML and Images</h1>
    <p>Select an HTML file, images folder, and reference background image.</p>

    <label for="htmlInput">HTML File:</label>
    <input type="file" id="htmlInput" accept=".html">
    <br><br>

    <label for="folderInput">Images Folder:</label>
    <input type="file" id="folderInput" webkitdirectory directory multiple>
    <br><br>

    <!-- <label for="imageInput">Reference Image (Background):</label>
    <input type="file" id="imageInput" accept="image/*">
    <br><br> -->

    <button id="submitBtn">Generate PNG</button>

    <div id="preview-container">
        <div id="preview-wrapper">
            <div id="preview"></div>
        </div>
    </div>

    <script>
    const predefinedImageURL = "green-card.jpg"; // Replace with your image path

        const htmlInput = document.getElementById('htmlInput');
        const folderInput = document.getElementById('folderInput');
        const imageInput = document.getElementById('imageInput');
        const submitBtn = document.getElementById('submitBtn');
        const previewContainer = document.getElementById('preview-container');
        const previewWrapper = document.getElementById('preview-wrapper');
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

      

            const reader = new FileReader();
            reader.onload = function (e) {
                const htmlText = e.target.result;
                const parser = new DOMParser();
                const doc = parser.parseFromString(htmlText, 'text/html');
                const specialText1 = "Priority Household  Not Eligible for Kerosene";
const specialText2 = "Antyodaya Anna Yojane Not Eligible for Kerosene";

let backgroundImage = 'default.jpg'; // Fallback image if no match is found
alert(document.body.innerHTML)
if (htmlText.includes(specialText1)) {
    backgroundImage = 'green-card.jpg';
} else if (htmlText.includes(specialText2)) {
    backgroundImage = 'red-card.jpg';
}
   alert(backgroundImage)             
        // Set background image based on condition

        const img = new Image();
        img.src = backgroundImage;
        img.onload = () => {
            previewContainer.style.width = img.width + "px";
            previewContainer.style.height = img.height + "px";
            previewContainer.style.backgroundImage = `url('${backgroundImage}')`;
            previewWrapper.style.minHeight = img.height + "px";
        };
               // Remove unwanted elements
               let unwantedTexts = []; // Declare outside to ensure accessibility

if (backgroundImage === 'red-card.jpg') {
    unwantedTexts = [
        "ಅಂತ್ಯೋದಯ ಅನ್ನ ಯೋಜನೆ ಸೀಮೆಎಣ್ಣೆಗೆ ಅನರ್ಹ",
        "Antyodaya Anna Yojane Not Eligible for Kerosene",
        "ಕರ್ನಾಟಕ ಸರ್ಕಾರ",
        "GOVERNMENT OF KARNATAKA"
    ];
} else {
    unwantedTexts = [
        "ಆದ್ಯತಾ ಕುಟುಂಬ ಸೀಮೆಎಣ್ಣೆಗೆ ಅನರ್ಹ",
        "Priority Household  Not Eligible for Kerosene",
        "ಕರ್ನಾಟಕ ಸರ್ಕಾರ",
        "GOVERNMENT OF KARNATAKA"
    ];
}
               

                doc.querySelectorAll("*").forEach(el => {
                    if (unwantedTexts.includes(el.textContent.trim())) {
                        el.remove();
                    }
                });

                // Remove government logo images and specimen.png
                doc.querySelectorAll("img").forEach(img => {
                    const src = img.src.toLowerCase();
                    if (src.includes("specimen.png") || src.includes("govtlogo")) {
                        img.remove();
                    }
                });

                // Add class names to each <table> tag dynamically
                doc.querySelectorAll("table").forEach((table, index) => {
                    table.classList.add(`table-${index + 1}`);
                });

                // Insert cleaned HTML into preview container
                preview.innerHTML = "";
                while (doc.body.firstChild) {
                    preview.appendChild(doc.body.firstChild);
                }

                // Ensure images are loaded before capturing
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
                            useCORS: true,
                            logging: true,
                            backgroundColor: null
                        }).then(canvas => {
                            const imgData = canvas.toDataURL("image/png");

                            // Download PNG
                            const link = document.createElement('a');
                            link.download = 'converted.png';
                            link.href = imgData;
                            link.click();

                          // Convert PNG to PDF (Full Page)
const { jsPDF } = window.jspdf;
const imgWidth = canvas.width;
const imgHeight = canvas.height;

// Convert pixels to mm (1px = 0.264583 mm)
const pdfWidth = imgWidth * 0.264583;
const pdfHeight = imgHeight * 0.264583;

// Create a PDF with the exact dimensions of the image
const pdf = new jsPDF({
    orientation: pdfWidth > pdfHeight ? 'l' : 'p', // Landscape if width > height
    unit: 'mm',
    format: [pdfWidth, pdfHeight] // Set custom PDF page size
});

// Add the image to the PDF (full size, no scaling)
pdf.addImage(imgData, 'PNG', 0, 0, pdfWidth, pdfHeight);
const totalPages = pdf.internal.getNumberOfPages();
if (totalPages > 1) {
    pdf.deletePage(2); // Remove the second page if it exists
}
// Save the PDF
pdf.save("converted.pdf");

                        }).catch(err => {
                            console.error('Error generating PNG:', err);
                        });
                    }, 1500);
                });
            };
            reader.readAsText(htmlInput.files[0]);
        });
    </script>
</body>
</html>
