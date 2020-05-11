
<?Php  
 Function Fetch_data()  
// Get Data From Database
 {  
      $Output = '';  
      $Connect = Mysqli_connect("localhost", "root", "", "futsal");   // Connect Your Database With Database Credentials
      $Sql = "SELECT * FROM laporan ORDER BY Id ASC";  
      $Result = Mysqli_query($Connect, $Sql);  
      While($Row = Mysqli_fetch_array($Result))  
      {        // Print All Data From Mysql 
      $Output .= '<Tr>  
                          <Td>'.$Row["id"].'</Td>  
                          <Td>'.$Row["username"].'</Td>  
                          <Td>'.$Row["status"].'</Td>  
                          <Td>'.$Row["jam"].'</Td>  
                     </Tr>  
                          ';  
      }  
      Return $Output;   // Giving Output
 }  
 If(Isset($_POST["Create_pdf"]))  
 {  
// Place The Tcpdf Class In The Root Folder And Call
// Making Template Of PDF Header As Well
      Require_once('Tcpdf/Tcpdf.Php');  
      $Obj_pdf = New TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, True, 'UTF-8', False);  
      $Obj_pdf->SetCreator(PDF_CREATOR);  
      $Obj_pdf->SetTitle("Test File For PDF");  // TITLE OF DOCUMENT
      $Obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $Obj_pdf->SetHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $Obj_pdf->SetFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $Obj_pdf->SetDefaultMonospacedFont('Arial');  
      $Obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $Obj_pdf->SetMargins(PDF_MARGIN_LEFT, '3', PDF_MARGIN_RIGHT);  
      $Obj_pdf->SetPrintHeader(False);  
      $Obj_pdf->SetPrintFooter(False);  
      $Obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $Obj_pdf->SetFont('Helvetica', '', 10);  
      $Obj_pdf->AddPage();  
// $Content Variable Consists Of All The Content In PDF
      $Content = '';  
      $Content .= '  
      <H3 Align="Center">Export Data From MySQL In PDF</H3><Br /><Br />  
      <Table Border="1" Cellspacing="0" Cellpadding="5">  
           <Tr>  
                <Th Width="4%">ID</Th>  
                <Th Width="31%">Name</Th>  
                <Th Width="8%">Gender</Th>  
                <Th Width="47%">Designation</Th>  
                <Th Width="10%">Age</Th>  
           </Tr>  
      ';  
      $Content .= Fetch_data();  
      $Content .= '</Table>';  
      $Obj_pdf->WriteHTML($Content);  
      $Obj_pdf->Output('Data.Pdf', 'I');  
 }  
 ?>  
 <!DOCTYPE Html>  
 <Html>  
      <Head>  
           <Title>Tutorial To Get Print PDF From PHP File Or Data</Title>  
           <Link Rel="Stylesheet" Href="Https://Maxcdn.Bootstrapcdn.Com/Bootstrap/3.3.6/Css/Bootstrap.Min.Css" />            
      </Head>  
      <Body>  
           <Br /><Br />  
           <Div Class="Container" Style="Width:700px;">  
                <H3 Align="Center">Export HTML Table Data To PDF Using TCPDF In PHP</H3><Br />  
                <Div Class="Table-Responsive">  
                     <Table Class="Table Table-Bordered">  
                          <Tr>  
                               <Th Width="5%">ID</Th>  
                               <Th Width="30%">Name</Th>  
                               <Th Width="10%">Gender</Th>  
                               <Th Width="45%">Designation</Th>  
                               <Th Width="10%">Age</Th>  
                          </Tr>  
                     <?Php  
                     Echo Fetch_data();  
                     ?>  
                     </Table>  
                     <Br />  
                     <Form Method="Post">  
                          <Input Type="Submit" Name="Create_pdf" Class="Btn Btn-Danger" Value="Create PDF" />  
                     </Form>  
                </Div>  
           </Div>  
      </Body>  
 </Html>  