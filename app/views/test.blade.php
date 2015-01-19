
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Select Dropdowns Plus Addable Text</title>
    <meta name="description" content="Selectize is a jQuery-based custom &lt;select&gt; UI control. It's useful for tagging, contact lists, country selectors, and so on.">

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700">
    <link rel="stylesheet" href="/select_dropdowns_plus_addable_test_selectize/css/normalize.css">
    <link rel="stylesheet" href="/select_dropdowns_plus_addable_test_selectize/css/styles.css">
    <link rel="stylesheet" href="/select_dropdowns_plus_addable_test_selectize/css/bootstrap3.css" data-theme="bootstrap3">
    <!--[if IE 8]><script src="http://cdnjs.cloudflare.com/ajax/libs/es5-shim/2.0.8/es5-shim.min.js"></script><![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script src="http://yandex.st/highlightjs/7.3/highlight.min.js"></script>
    <script src="/select_dropdowns_plus_addable_test_selectize/js/selectize.js"></script>
    <script src="/select_dropdowns_plus_addable_test_selectize/js/main.js"></script>
</head>
<body>
<body>


<div class="inset" id="content">
    <div class="wrapper tab-content" id="demos">

        <!-- ************** Single Item Select Demo ************** -->
        <section class="demo">
            <div class="header">
                Single Item Select
            </div>
            <div class="sandbox">
                <label for="select-beast">Beast:</label>
                <select id="select-beast" class="demo-default" placeholder="Select a person...">
                    <option value="">Select a person...</option>
                    <option value="1">Chuck Testa</option>
                    <option value="4">Sage Cattabriga-Alosa</option>
                    <option value="3">Nikola Tesla</option>
                </select>
            </div>
            <div class="description">
                The most vanilla of examples.
            </div>
            <script class="show">
                $('#select-beast').selectize({
                    create: true,
                    sortField: 'text'
                });
            </script>
        </section>

</body>
</html>