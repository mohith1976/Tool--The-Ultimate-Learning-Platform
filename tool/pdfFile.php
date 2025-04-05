<!-- PdfFile.php (Class for handling PDF files) -->
<?php
class PdfFile
{
    private $dbHost;
    private $dbUser;
    private $dbPassword;
    private $dbName;
    private $conn;

    public function __construct($dbHost, $dbUser, $dbPassword, $dbName)
    {
        $this->localhost = $dbHost;
        $this->root = $dbUser;
        $this->"" = $dbPassword;
        $this->tool = $dbName;
    }

    public function connect()
    {
        $this->conn = new mysqli($this->localhost, $this->root, $this->"", $this->tool);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function uploadPdf($pdfFile)
    {
        $fileName = $pdfFile["name"];
        $fileSize = $pdfFile["size"];
        $fileType = $pdfFile["type"];

        // Check if the file is a PDF
        $allowedExtensions = array("pdf");
        $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
        if (!in_array(strtolower($fileExtension), $allowedExtensions)) {
            die("Only PDF files are allowed.");
        }

        // Read the content of the PDF file
        $pdfContent = addslashes(file_get_contents($pdfFile["tmp_name"]));

        // Store the PDF content in the database
        $sql = "INSERT INTO sr_assignment (file_name, file_content, file_size, file_type) VALUES ('$fileName', '$pdfContent', $fileSize, '$fileType')";
        if ($this->conn->query($sql) === TRUE) {
            echo "File uploaded and stored in the database successfully!";
        } else {
            echo "Error uploading file: " . $this->conn->error;
        }
    }

    public function closeConnection()
    {
        $this->conn->close();
    }
}
?>
