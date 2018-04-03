<?php

# get correct id for plugin
$thisfile=basename(__FILE__, ".php");
$thisfile_slogan=basename(__FILE__, ".php");
i18n_merge($thisfile_slogan) || i18n_merge($thisfile_slogan,'en_US');

# register plugin
register_plugin(
	$thisfile, //Plugin id
	'slogan', 	//Plugin name
	'1.2', 		//Plugin version
	'Zorato',  //Plugin author
	'', //author website
	'slogans and phrases', //Plugin description
	'pages', //page type - on which admin tab to display
	'slogans'  //main function (administration)
);

#register scripts & styles
register_script('autosize', $SITEURL.'plugins/slogan/resources/jquery.autosize-min.js', '1.11', FALSE);
register_style('slogan-style', $SITEURL.'plugins/slogan/resources/slogan.css', '1.0', 'screen');

# add a link in the admin tab 'theme'
add_action('pages-sidebar','createSideMenu',array($thisfile,i18n_r($thisfile_slogan.'/SLOGANS_BUTTON_NAME')));

#filter
add_filter('content','filter_slogans');

if (!isset($_GET['ajax']))
{
    queue_script('autosize',GSBACK);
    queue_style('slogan-style',GSBACK); 
}

# functions
function slogans(){
	global $thisfile_slogan;
    global $slogans;
    global $langs;
    $slogans = get_slogans();
    $langs = return_i18n_available_languages();
    if (isset($_GET['action'],$_GET['item']) && $_GET['action']=='delete' && array_key_exists($_GET['item'],$slogans))
    {
        unset($slogans[$_GET['item']]);
        set_slogans($slogans);
    }
    if (isset($_POST['submit_slogans']))
    {
        if (isset($_POST['slogans'])) $slogans = array_merge($slogans,$_POST['slogans']);
        
        if (!empty($_POST['new_slogans']))
        {
            foreach($_POST['new_slogans'] as $name) 
            {
                $name = preg_replace('/[^ a-zA-Z0-9\-\_]/','',$name);
                if (empty($name)) continue;
                while(array_key_exists($name,$slogans)) $name .= '_'.rand(11,99);
                $slogans[$name]=array();
                foreach ($langs as $lang)
                    $slogans[$name][$lang] = '';
            }
        }
        set_slogans($slogans);
        ?>
        <script>
            $(function(){ 
                $('div.bodycontent').before('<div class="updated" ><?php i18n($thisfile_slogan.'/SUCCESS_SAVE')?></div>'); 
                $(".updated").fadeOut(500).fadeIn(500).delay(10000).fadeOut(500); 
            });
        </script>
        <?php
    }
    echo '<h3>'. i18n_r($thisfile_slogan.'/SLOGANS_TITLE') .'</h3>';
    $form_opened = false;
    echo '<form method="POST" id="slogans-form"><div id="slogans-list-box">';
    show_slogans();
    show_service_info();
}

function show_slogans() {
    global $thisfile_slogan;
    global $slogans;
    global $langs;
    if ($slogans && count($slogans))
    {
        echo '<div id="slogans-list">';
        foreach($slogans as $name=>$values):
        ?>
             <div class="item">
                <span class="slogan-name"><?php echo $name?></span>
                <a href="<?php echo $_SERVER['REQUEST_URI'].'&action=delete&item='.$name;?> " class="del-btn" rel="<?php echo $name;?>">×</a> 
                <span class="slogan-markdown">(%<?php echo $name?>%)</span>
                <div class="clear"></div>
                <table>
                <?php foreach($langs as $lang):?>
                    <tr>
                    <td><span class="lang"><?php echo strtoupper($lang)?>:</span></td>
                    <td><textarea name="slogans[<?php echo $name?>][<?php echo $lang?>]" class="slogan-text"><?php echo empty($values[$lang])?'':$values[$lang];?></textarea></td>
                    </tr>
                <?php endforeach;?>
                </table>
            </div>
        <?php endforeach;
        echo '</div>';
    }
    else 
    {
        echo '<h2>'.i18n_r($thisfile_slogan.'/NO_SLOGANS').'</h2>';
    }
}

function show_service_info()
{
	global $thisfile_slogan;
    ?>
    <div class="new-slogans-box">
        <noscript>Name: <input name="new_slogans[]" type="text" placeholder="<?php i18n($thisfile_slogan.'/ENTER_NEW_SLOGAN_NAME');?>" value="qwerty"></noscript>
    </div>
    <input class="submit" type="submit" name="submit_slogans" id="submit-slogan-btn" value="<?php i18n($thisfile_slogan.'/SAVE');?>">
    <input type="submit" class="submit" name="add-slogan-btn" id="add-slogan-btn" value="<?php i18n($thisfile_slogan.'/ADD_SLOGAN');?>">
    </form>
    </div>
    <script>
        $(function(){
            $('#add-slogan-btn').on('click',function(event){
               event.preventDefault();
               $('.new-slogans-box').append('<?php i18n($thisfile_slogan.'/NAME');?>: <input name="new_slogans[]" type="text" placeholder="<?php i18n($thisfile_slogan.'/NEW_PLACEHOLDER');?>"><br>');
            });
            $('.slogan-text').autosize();
            $('.del-btn').on('click',function(event){
                event.preventDefault();
                var $item = $(this).attr('rel');
                if (confirm('<?php i18n($thisfile_slogan.'/DELETE');?> "'+$item+'"?'))
                {   
                    $.ajax({
                        url:'load.php?id=slogan',
                        data: { action: 'delete', item: $item},
                        dataFilter: function(data){
                            return $(data).find('#slogans-list').html();
                        },
                        success: function(data) {
                            $('#slogans-list').html(data);
                            $('.slogan-text').autosize();
                            $('div.bodycontent').before('<div class="updated" style="display:block;">'+$item+' <?php i18n($thisfile_slogan.'/SUCCESS_DELETE');?></div>');
                            $(".updated").fadeOut(500).fadeIn(500).delay(10000).fadeOut(500);
                        },
                        error: function(jqXHR){
                            $('div.bodycontent').before('<div class="error" style="display:block;"><?php i18n($thisfile_slogan.'/ERROR');?><br>'+jqXHR.responseText+'</div>');
                            $(".error").fadeOut(500).fadeIn(500).delay(10000).fadeOut(500);
                        }
                    });
                }
            });
        });
    </script>
    <?php
}

function get_slogans()
{
    return file_exists(GSDATAOTHERPATH.'slogans.txt')?@unserialize(@file_get_contents(GSDATAOTHERPATH.'slogans.txt')):array();
}

function set_slogans($arr)
{
    file_put_contents(GSDATAOTHERPATH.'slogans.txt',serialize($arr));
}

function return_slogan($name)
{
    $slogans = get_slogans();
    $slogan = array_key_exists($name,$slogans)?$slogans[$name]:'';
    $languages = return_i18n_languages();
    return empty($slogan[$languages[0]])?@$slogan[return_i18n_default_language()]:$slogan[$languages[0]];
}

function get_slogan($name)
{
    return return_slogan($name);
}


function filter_slogans($content)
{
    $slogans = get_slogans();
    foreach($slogans as $name=>$values)
    {
        $content = str_replace('(%'.$name.'%)',return_slogan($name,false),$content);
    }
    return $content;
}
