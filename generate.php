<?php declare(strict_types=1);

require_once __DIR__ . '/src/bootstrap.php';

use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;

$writer = new PngWriter();

// Create QR code
$qrCode = QrCode::create('Data')
	->setEncoding(new Encoding('UTF-8'))
	->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
	->setSize(300)
	->setMargin(10)
	->setRoundBlockSizeMode(new RoundBlockSizeModeMargin())
	->setForegroundColor(new Color(0, 0, 0))
	->setBackgroundColor(new Color(255, 255, 255));

// Create generic logo
$logo = Logo::create(__DIR__ . '/vendor/endroid/qr-code/tests/assets/symfony.png')
	->setResizeToWidth(150);

// Create generic label
$label = Label::create('Label')
	->setTextColor(new Color(255, 0, 0))
	->setBackgroundColor(new Color(0, 0, 0));

$result = $writer->write($qrCode, $logo, $label);

// Directly output the QR code
header('Content-Type: ' . $result->getMimeType());
echo $result->getString();

// Save it to a file
$result->saveToFile(__DIR__ . '/qrcode.png');

// Generate a data URI to include image data inline (i.e. inside an <img> tag)
$dataUri = $result->getDataUri();
