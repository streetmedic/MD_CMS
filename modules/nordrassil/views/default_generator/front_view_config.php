&lt;?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$asset = new CMS_Asset();
$asset->add_cms_js("nocms/js/jquery-ace/ace/ace.js");
$asset->add_cms_js("nocms/js/jquery-ace/ace/theme-eclipse.js");
$asset->add_cms_js("nocms/js/jquery-ace/ace/mode-html.js");
$asset->add_cms_js("nocms/js/jquery-ace/ace/mode-javascript.js");
$asset->add_cms_js("nocms/js/jquery-ace/ace/mode-css.js");
$asset->add_cms_js("nocms/js/jquery-ace/jquery-ace.min.js");
echo $asset->compile_js();
?&gt;
<h3>Record Template</h3>
<form method="post">
    <textarea id="template" name="template">&lt;?php echo $record_template; ?&gt;</textarea>
    <br />
    <div class="pull-right">
        <a id="btn-restore" href="#" class="btn btn-default">Default</a>
        <button name="submit" class="btn btn-primary">Save</button>
    </div>
    <div style="clear:both;"></div>
</form>
<textarea id="default_template" style="display:none;">&lt;?php echo $default_record_template; ?&gt;</textarea>
<script type="text/javascript" src="{{ base_url }}assets/nocms/js/cms_front_view_config.js"></script>
