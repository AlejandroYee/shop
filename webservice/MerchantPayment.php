<html>
<head>
<title>TrustPay - ֧������</title>
<meta http-equiv='Content-Type' content='text/html; charset=GB2312'>
</head>
<body>
<?php 
	require("api.php");

	$add = "http://127.0.0.1:8080/axis/services/B2CWarpper?wsdl";
//	$add = "http://187.61.1.5:8080/axis/services/B2CWarpper?wsdl";

	$tOrderNo = $_POST['OrderNo'];
	$tOrderDesc = iconv("GBK","UTF-8",$_POST['OrderDesc']);
	$tOrderDate = $_POST['OrderDate'];
	$tOrderTime = $_POST['OrderTime'];
	$tOrderAmountStr = $_POST['OrderAmount'];
	$tOrderURL = $_POST['OrderURL'];
	$tProductType = $_POST['ProductType'];
	$tPaymentType = $_POST['PaymentType'];
	$tNotifyType = $_POST['NotifyType'];
	$tResultNotifyURL = $_POST['ResultNotifyURL'];
	$tMerchantRemarks = iconv("GBK","UTF-8",$_POST['MerchantRemarks']);
	$tPaymentLinkType = $_POST['PaymentLinkType'];
	$tTotalCount = $_POST['TotalCount'];
	$tOrderItems=array();
	for($i=0;$i<$tTotalCount;$i++)
	{
		print("<br>".$_POST['productname'][$i]."</br>");
		$tOrderItems[]=array(iconv("GBK","UTF-8",$_POST['productid'][$i]), iconv("GBK","UTF-8",$_POST['productname'][$i]), $_POST['uniteprice'][$i], $_POST['qty'][$i]);
	}
	
	//$merchantPayment = new MerchantPayment($add,$tOrderNo,$tOrderDesc,$tOrderDate,$tOrderTime,$tOrderAmountStr,$tOrderURL,$tProductType,$tPaymentType,$tNotifyType,$tResultNotifyURL,$tMerchantRemarks,$tPaymentLinkType);
	$merchantPaymentRequest = new MerchantPaymentRequest($tOrderNo,$tOrderDesc,$tOrderDate,$tOrderTime,$tOrderAmountStr,$tOrderURL,$tProductType,$tPaymentType,$tNotifyType,$tResultNotifyURL,$tMerchantRemarks,$tPaymentLinkType,$tOrderItems);
	$merchantPayment = new MerchantPayment($add,$merchantPaymentRequest);
	$merchantPaymentResult = $merchantPayment->invoke();
	//$merchantPayment->showResult();
	//��ʾ���
	if($merchantPaymentResult->isSucess==TRUE)
	{
		$PaymentURL = $merchantPaymentResult->paymentURL;
	}
	else
	{
		print("<br>Failed!!!"."</br>");
		print("<br>return code:".$merchantPaymentResult->returnCode."</br>"); 
		print("<br>Error Message:".$merchantPaymentResult->ErrorMessage."</br>");
	}


?>
	<script language=javascript>
	//	֧������ҳ����ת
		var redirectURL="<?=$PaymentURL?>";
		if(redirectURL!=null&&redirectURL!="")
		{
			location.href='<?=$PaymentURL?>';
		}
	</script>
</body>
</html>