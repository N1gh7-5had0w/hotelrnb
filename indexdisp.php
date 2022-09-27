<?php
$attr = $_POST["attr"];
if(isset($_POST["submit"]))
{
if($attr === "attr")
{	header("Location: index.php");	}
if($attr === "customer")
{	header("Location: dispcustomer.php");	}
if($attr === "table")
{	header("Location: disptable.php");	}
if($attr === "rooms")
{	header("Location: disprooms.php");	}
if($attr === "reserves")
{	header("Location: dispreserves.php");	}
if($attr === "books")
{	header("Location: dispbooks.php");	}
if($attr === "bill")
{	header("Location: dispbill.php");	}
}
?>