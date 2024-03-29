﻿<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Bootstrap Live Editor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <link href="bootstrap/bootstrap_extend.css" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
</head>
<body>

<div class="container">
    <div class="row-fluid">
    <br>
        <div class="tab-pane active" id="tab1" style="border:1px solid #ddd;">
            <div style="min-height:460px">
                <textarea id="txtContent" name="txtContent" rows="4" cols="30">
                    <div class="page-header"><h1>Page header <small>Subtext for header</small></h1></div><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus leo ante, consectetur sit amet vulputate vel, dapibus sit amet lectus.</p>
                </textarea>
            </div>
        </div>
    </div>
</div>

<script src="scripts/common/jquery-1.7.min.js" type="text/javascript"></script>
<script src="scripts/innovaeditor.js" type="text/javascript"></script>
<script src="scripts/innovamanager.js" type="text/javascript"></script>

<script src="http://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js" type="text/javascript"></script>
<script src="scripts/common/webfont.js" type="text/javascript"></script>
<script>
function onText(){
	var str = $('#txtContent').data('liveEdit').getXHTMLBody().trim();
}
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#txtContent').liveEdit({
            height: 450,
            css: ['bootstrap/css/bootstrap.min.css', 'bootstrap/bootstrap_extend.css'],            
            groups: [
                    ["group1", "", ["Bold", "Italic", "Underline", "ForeColor", "RemoveFormat"]],
                    ["group2", "", ["Bullets", "Numbering", "Indent", "Outdent"]],
                    ["group3", "", ["Paragraph", "FontSize", "FontDialog", "TextDialog"]],
                    ["group4", "", ["LinkDialog", "ImageDialog", "TableDialog", "Snippets"]],
                    ["group5", "", ["Undo", "Redo", "FullScreen", "SourceDialog"]]
                    ]
        });
        $('#txtContent').data('liveEdit').startedit();
    });
</script>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" onclick="onText()" value="alex">
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>


</body>
</html>