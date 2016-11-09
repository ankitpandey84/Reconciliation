<?php
class Parser extends CI_Controller {





public function simple_xml(){
$username = $this->session->userdata('username');
$password = $this->session->userdata('password');
if(isset($username))
{
$this->load->helper('xml');
$dom =xml_dom();
$book = xml_add_child($dom, 'book');
xml_add_child($book,'tittle','Hyperion');
$author = xml_add_child($book,'author','Dan Simmons');
xml_add_attribute($author,'birthdate', '1948-04-04');
xml_print($dom);



}

else
{
$this->load->view('headerlogin');
$this->load->view('login');
//print_r($this->session->all_userdata());
}
}


public function read_xml_file()

{
$username =$this->session->userdata('username');
$password = $this->session->userdata('password');

if(isset($username))
{

$doc = new DOMdocument();
$doc->load->view->xmlSample( 'sample2.xml' );//xml file loading here

$employees = $doc->getElementsByTagName( "employee" );
foreach( $employees as $employee )
{
  $names = $employee->getElementsByTagName( "name" );
  $name = $names->item(0)->nodeValue;

  $ages= $employee->getElementsByTagName( "age" );
  $age= $ages->item(0)->nodeValue;

  $salaries = $employee->getElementsByTagName( "salary" );
  $salary = $salaries->item(0)->nodeValue;

  echo "<b>$name - $age - $salary\n</b><br>";
  }






}


else
{




}


}








}



