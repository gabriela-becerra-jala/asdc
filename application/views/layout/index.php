<!DOCTYPE html>
<html>

<head>
     <title><?=isset($titleForLayout) ? $titleForLayout : 'ASDC'?></title>
                <meta charset="utf-8">
        <?= link_tag(base_url().'images/favicon.ico', 'SHORTCUT ICON', NULL)?>
        <?= script_tag (base_url().'js/jquery-2.1.3.min.js')?>
        <?= link_tag(base_url().'css/docs.css')?>
        <?= link_tag(base_url().'css/metro.css')?>
        <?= link_tag(base_url().'css/metro-icons.css')?>
        <?= link_tag(base_url().'css/asdc.css')?>
        <?= link_tag(base_url().'css/pretiffy/pretiffy.css')?>
        <?= script_tag (base_url().'js/metro.js')?>
        <!--<?= script_tag (base_url().'js/basic.js')?>-->
        <?= script_tag (base_url().'js/select2.min.js')?>
        <?= script_tag (base_url().'js/ga.js')?>-->
        <?= script_tag (base_url().'js/prettify/run_prettify.js')?>
        <?= script_tag (base_url().'js/prettify/prettify.js')?>
        <?= script_tag (base_url().'js/select2.min.js')?>
        <?= script_tag (base_url().'js/jquery.dataTables.min.js')?>



  <script>

  </script>
</head>

<body>
    <?php if($header) echo $header ;?>
    <?php //if($left) echo $left ;?>
    <?php if($middle) echo $middle ;?>
    <?php if($footer) echo $footer ;?>
</body>

</html>
