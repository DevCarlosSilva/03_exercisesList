<?php
session_start();
$totalDiscount = $_SESSION['totalDiscount'];
$totalPaid = $_SESSION['totalPaid'];
echo "Data entry ended.<br>Total discount: R$ $totalDiscount<br>Total paid: R$ $totalPaid<br><a href='index.php'>Return?</a>";