<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig */
class __TwigTemplate_abc754bb41213ffa1232827be86736bb02ec9e5dee83f2913c257524df9ba58a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "

";
        // line 18
        echo "
";
        // line 20
        echo "
";
        // line 21
        $context["associationadmin"] = $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description", array()), "associationadmin", array());
        // line 22
        echo "
<!-- edit many association -->

<script type=\"text/javascript\">

    ";
        // line 32
        echo "    var field_dialog_form_list_link_";
        echo $this->getContext($context, "id");
        echo " = function(event) {
        initialize_popup_";
        // line 33
        echo $this->getContext($context, "id");
        echo "();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 38
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_list_link] handle link click in a list');

        var element = jQuery(this).parents('#field_dialog_";
        // line 40
        echo $this->getContext($context, "id");
        echo " .sonata-ba-list-field');

        // the user does not click on a row column
        if (element.length == 0) {
            // make a recursive call (ie: reset the filter)
            jQuery.ajax({
                type: 'GET',
                url: jQuery(this).attr('href'),
                dataType: 'html',
                success: function(html) {
                    Admin.log('[";
        // line 50
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_list_link] callback success, attach valid js event');

                    field_dialog_content_";
        // line 52
        echo $this->getContext($context, "id");
        echo ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 53
        echo $this->getContext($context, "id");
        echo "();
                }
            });

            return;
        }

        jQuery('#";
        // line 60
        echo $this->getContext($context, "id");
        echo "').val(element.attr('objectId'));
        jQuery('#";
        // line 61
        echo $this->getContext($context, "id");
        echo "').trigger('change');

        field_dialog_";
        // line 63
        echo $this->getContext($context, "id");
        echo ".modal('hide');
    }

    // this function handle action on the modal list when inside a selected list
    var field_dialog_form_list_handle_action_";
        // line 67
        echo $this->getContext($context, "id");
        echo "  =  function() {

        Admin.log('[";
        // line 69
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_list_handle_action] attaching valid js event');

        Admin.add_filters(field_dialog_";
        // line 71
        echo $this->getContext($context, "id");
        echo ");

        // capture the submit event to make an ajax call, ie : POST data to the
        // related create admin
        jQuery('a', field_dialog_";
        // line 75
        echo $this->getContext($context, "id");
        echo ").on('click', field_dialog_form_list_link_";
        echo $this->getContext($context, "id");
        echo ");
        jQuery('form', field_dialog_";
        // line 76
        echo $this->getContext($context, "id");
        echo ").on('submit', function(event) {
            event.preventDefault();

            var form = jQuery(this);

            Admin.log('[";
        // line 81
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_list_handle_action] catching submit event, sending ajax request');

            jQuery(form).ajaxSubmit({
                type: form.attr('method'),
                url: form.attr('action'),
                dataType: 'html',
                data: {_xml_http_request: true},
                success: function(html) {

                    Admin.log('[";
        // line 90
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_list_handle_action] form submit success, restoring event');

                    field_dialog_content_";
        // line 92
        echo $this->getContext($context, "id");
        echo ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 93
        echo $this->getContext($context, "id");
        echo "();
                }
            });
        });
    }

    // handle the list link
    var field_dialog_form_list_";
        // line 100
        echo $this->getContext($context, "id");
        echo " = function(event) {

        initialize_popup_";
        // line 102
        echo $this->getContext($context, "id");
        echo "();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 107
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_list] open the list modal');

        var a = jQuery(this);

        field_dialog_content_";
        // line 111
        echo $this->getContext($context, "id");
        echo ".html('');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 119
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_list] retrieving the list content');

                // populate the popup container
                field_dialog_content_";
        // line 122
        echo $this->getContext($context, "id");
        echo ".html(html);

                field_dialog_title_";
        // line 124
        echo $this->getContext($context, "id");
        echo ".html(\"";
        echo $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "associationadmin"), "label", array()), array(), $this->getAttribute($this->getContext($context, "associationadmin"), "translationdomain", array()));
        echo "\");

                Admin.shared_setup(field_dialog_";
        // line 126
        echo $this->getContext($context, "id");
        echo ");

                field_dialog_form_list_handle_action_";
        // line 128
        echo $this->getContext($context, "id");
        echo "();

                // open the dialog in modal mode
                field_dialog_";
        // line 131
        echo $this->getContext($context, "id");
        echo ".modal();

                Admin.setup_list_modal(field_dialog_";
        // line 133
        echo $this->getContext($context, "id");
        echo ");
            }
        });
    };

    // handle the add link
    var field_dialog_form_add_";
        // line 139
        echo $this->getContext($context, "id");
        echo " = function(event) {
        initialize_popup_";
        // line 140
        echo $this->getContext($context, "id");
        echo "();

        event.preventDefault();
        event.stopPropagation();

        var a = jQuery(this);

        field_dialog_content_";
        // line 147
        echo $this->getContext($context, "id");
        echo ".html('');

        Admin.log('[";
        // line 149
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_add] add link action');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 157
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_add] ajax success', field_dialog_";
        echo $this->getContext($context, "id");
        echo ");

                // populate the popup container
                field_dialog_content_";
        // line 160
        echo $this->getContext($context, "id");
        echo ".html(html);
                field_dialog_title_";
        // line 161
        echo $this->getContext($context, "id");
        echo ".html(\"";
        echo $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "associationadmin"), "label", array()), array(), $this->getAttribute($this->getContext($context, "associationadmin"), "translationdomain", array()));
        echo "\");

                Admin.shared_setup(field_dialog_";
        // line 163
        echo $this->getContext($context, "id");
        echo ");

                // capture the submit event to make an ajax call, ie : POST data to the
                // related create admin
                jQuery('a', field_dialog_";
        // line 167
        echo $this->getContext($context, "id");
        echo ").on('click', field_dialog_form_action_";
        echo $this->getContext($context, "id");
        echo ");
                jQuery('form', field_dialog_";
        // line 168
        echo $this->getContext($context, "id");
        echo ").on('submit', field_dialog_form_action_";
        echo $this->getContext($context, "id");
        echo ");

                // open the dialog in modal mode
                field_dialog_";
        // line 171
        echo $this->getContext($context, "id");
        echo ".modal();

                Admin.setup_list_modal(field_dialog_";
        // line 173
        echo $this->getContext($context, "id");
        echo ");
            }
        });
    };

    // handle the post data
    var field_dialog_form_action_";
        // line 179
        echo $this->getContext($context, "id");
        echo " = function(event) {

        var element = jQuery(this);

        // return if the link is an anchor inside the same page
        if (this.nodeName == 'A' && (element.attr('href').length == 0 || element.attr('href')[0] == '#')) {
            return;
        }

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 191
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_action] action catch', this);

        initialize_popup_";
        // line 193
        echo $this->getContext($context, "id");
        echo "();

        if (this.nodeName == 'FORM') {
            var url  = element.attr('action');
            var type = element.attr('method');
        } else if (this.nodeName == 'A') {
            var url  = element.attr('href');
            var type = 'GET';
        } else {
            alert('unexpected element : @' + this.nodeName + '@');
            return;
        }

        if (element.hasClass('sonata-ba-action')) {
            Admin.log('[";
        // line 207
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_action] reserved action stop catch all events');
            return;
        }

        var data = {
            _xml_http_request: true
        }

        var form = jQuery(this);

        Admin.log('[";
        // line 217
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_action] execute ajax call');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: url,
            type: type,
            data: data,
            success: function(data) {
                Admin.log('[";
        // line 225
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_action] ajax success');

                // if the crud action return ok, then the element has been added
                // so the widget container must be refresh with the last option available
                if (typeof data != 'string' && data.result == 'ok') {
                    field_dialog_";
        // line 230
        echo $this->getContext($context, "id");
        echo ".modal('hide');

                    ";
        // line 232
        if (($this->getAttribute($this->getContext($context, "sonata_admin"), "edit", array()) == "list")) {
            // line 233
            echo "                        ";
            // line 237
            echo "                        jQuery('#";
            echo $this->getContext($context, "id");
            echo "').val(data.objectId);
                        jQuery('#";
            // line 238
            echo $this->getContext($context, "id");
            echo "').change();

                    ";
        } else {
            // line 241
            echo "
                        // reload the form element
                        jQuery('#field_widget_";
            // line 243
            echo $this->getContext($context, "id");
            echo "').closest('form').ajaxSubmit({
                            url: '";
            // line 244
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_retrieve_form_element", array("elementId" => $this->getContext($context, "id"), "subclass" => $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin", array()), "getActiveSubclassCode", array(), "method"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin", array()), "root", array()), "id", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin", array()), "root", array()), "subject", array())), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin", array()), "root", array()), "uniqid", array()), "code" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin", array()), "root", array()), "code", array())));
            // line 250
            echo "',
                            data: {_xml_http_request: true },
                            dataType: 'html',
                            type: 'POST',
                            success: function(html) {
                                jQuery('#field_container_";
            // line 255
            echo $this->getContext($context, "id");
            echo "').replaceWith(html);
                                var newElement = jQuery('#";
            // line 256
            echo $this->getContext($context, "id");
            echo " [value=\"' + data.objectId + '\"]');
                                if (newElement.is(\"input\")) {
                                    newElement.attr('checked', 'checked');
                                } else {
                                    newElement.attr('selected', 'selected');
                                }

                                jQuery('#field_container_";
            // line 263
            echo $this->getContext($context, "id");
            echo "').trigger('sonata-admin-append-form-element');
                            }
                        });

                    ";
        }
        // line 268
        echo "
                    return;
                }

                // otherwise, display form error
                field_dialog_content_";
        // line 273
        echo $this->getContext($context, "id");
        echo ".html(data);

                Admin.shared_setup(field_dialog_";
        // line 275
        echo $this->getContext($context, "id");
        echo ");

                // reattach the event
                jQuery('form', field_dialog_";
        // line 278
        echo $this->getContext($context, "id");
        echo ").submit(field_dialog_form_action_";
        echo $this->getContext($context, "id");
        echo ");
            }
        });

        return false;
    }

    var field_dialog_";
        // line 285
        echo $this->getContext($context, "id");
        echo "         = false;
    var field_dialog_content_";
        // line 286
        echo $this->getContext($context, "id");
        echo " = false;
    var field_dialog_title_";
        // line 287
        echo $this->getContext($context, "id");
        echo "   = false;

    function initialize_popup_";
        // line 289
        echo $this->getContext($context, "id");
        echo "() {
        // initialize component
        if (!field_dialog_";
        // line 291
        echo $this->getContext($context, "id");
        echo ") {
            field_dialog_";
        // line 292
        echo $this->getContext($context, "id");
        echo "         = jQuery(\"#field_dialog_";
        echo $this->getContext($context, "id");
        echo "\");
            field_dialog_content_";
        // line 293
        echo $this->getContext($context, "id");
        echo " = jQuery(\".modal-body\", \"#field_dialog_";
        echo $this->getContext($context, "id");
        echo "\");
            field_dialog_title_";
        // line 294
        echo $this->getContext($context, "id");
        echo "   = jQuery(\".modal-title\", \"#field_dialog_";
        echo $this->getContext($context, "id");
        echo "\");

            // move the dialog as a child of the root element, nested form breaks html ...
            jQuery(document.body).append(field_dialog_";
        // line 297
        echo $this->getContext($context, "id");
        echo ");

            Admin.log('[";
        // line 299
        echo $this->getContext($context, "id");
        echo "|field_dialog] move dialog container as a document child');
        }
    }

    ";
        // line 306
        echo "    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_dialog_form_add_";
        // line 308
        echo $this->getContext($context, "id");
        echo "(link) {

        // remove the html event
        link.onclick = null;

        initialize_popup_";
        // line 313
        echo $this->getContext($context, "id");
        echo "();

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_dialog_form_add_";
        // line 317
        echo $this->getContext($context, "id");
        echo ")
            .trigger('click')
        ;

        return false;
    }

    if (field_dialog_";
        // line 324
        echo $this->getContext($context, "id");
        echo ") {
        Admin.shared_setup(field_dialog_";
        // line 325
        echo $this->getContext($context, "id");
        echo ");
    }

    ";
        // line 328
        if (($this->getAttribute($this->getContext($context, "sonata_admin"), "edit", array()) == "list")) {
            // line 329
            echo "        ";
            // line 332
            echo "        // this function initialize the popup
        // this can be only done this way has popup can be cascaded
        function start_field_dialog_form_list_";
            // line 334
            echo $this->getContext($context, "id");
            echo "(link) {

            link.onclick = null;

            initialize_popup_";
            // line 338
            echo $this->getContext($context, "id");
            echo "();

            // add the jQuery event to the a element
            jQuery(link)
                .click(field_dialog_form_list_";
            // line 342
            echo $this->getContext($context, "id");
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function remove_selected_element_";
            // line 349
            echo $this->getContext($context, "id");
            echo "(link) {

            link.onclick = null;

            jQuery(link)
                .click(field_remove_element_";
            // line 354
            echo $this->getContext($context, "id");
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function field_remove_element_";
            // line 361
            echo $this->getContext($context, "id");
            echo "(event) {
            event.preventDefault();

            if (jQuery('#";
            // line 364
            echo $this->getContext($context, "id");
            echo " option').get(0)) {
                jQuery('#";
            // line 365
            echo $this->getContext($context, "id");
            echo "').attr('selectedIndex', '-1').children(\"option:selected\").attr(\"selected\", false);
            }

            jQuery('#";
            // line 368
            echo $this->getContext($context, "id");
            echo "').val('');
            jQuery('#";
            // line 369
            echo $this->getContext($context, "id");
            echo "').trigger('change');

            return false;
        }
        ";
            // line 376
            echo "
        // update the label
        jQuery('#";
            // line 378
            echo $this->getContext($context, "id");
            echo "').on('change', function(event) {

            Admin.log('[";
            // line 380
            echo $this->getContext($context, "id");
            echo "] update the label');

            jQuery('#field_widget_";
            // line 382
            echo $this->getContext($context, "id");
            echo "').html(\"<span><img src=\\\"";
            echo $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/ajax-loader.gif");
            echo "\\\" style=\\\"vertical-align: middle; margin-right: 10px\\\"/>";
            echo $this->env->getExtension('translator')->trans("loading_information", array(), "SonataAdminBundle");
            echo "</span>\");
            jQuery.ajax({
                type: 'GET',
                url: '";
            // line 385
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_short_object_information", array("objectId" => "OBJECT_ID", "uniqid" => $this->getAttribute($this->getContext($context, "associationadmin"), "uniqid", array()), "code" => $this->getAttribute($this->getContext($context, "associationadmin"), "code", array()), "linkParameters" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description", array()), "options", array()), "link_parameters", array())));
            // line 390
            echo "'.replace('OBJECT_ID', jQuery(this).val()),
                dataType: 'html',
                success: function(html) {
                    jQuery('#field_widget_";
            // line 393
            echo $this->getContext($context, "id");
            echo "').html(html);
                }
            });
        });

    ";
        }
        // line 399
        echo "

</script>
<!-- / edit many association -->

";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  692 => 399,  683 => 393,  678 => 390,  676 => 385,  666 => 382,  661 => 380,  656 => 378,  652 => 376,  645 => 369,  641 => 368,  635 => 365,  631 => 364,  625 => 361,  615 => 354,  607 => 349,  597 => 342,  590 => 338,  583 => 334,  579 => 332,  577 => 329,  575 => 328,  569 => 325,  565 => 324,  555 => 317,  548 => 313,  540 => 308,  536 => 306,  529 => 299,  524 => 297,  516 => 294,  510 => 293,  504 => 292,  500 => 291,  495 => 289,  490 => 287,  486 => 286,  482 => 285,  470 => 278,  464 => 275,  459 => 273,  452 => 268,  444 => 263,  434 => 256,  430 => 255,  423 => 250,  421 => 244,  417 => 243,  413 => 241,  407 => 238,  402 => 237,  400 => 233,  398 => 232,  393 => 230,  385 => 225,  374 => 217,  361 => 207,  344 => 193,  339 => 191,  324 => 179,  315 => 173,  310 => 171,  302 => 168,  296 => 167,  289 => 163,  282 => 161,  278 => 160,  270 => 157,  259 => 149,  254 => 147,  244 => 140,  240 => 139,  231 => 133,  226 => 131,  220 => 128,  215 => 126,  208 => 124,  203 => 122,  197 => 119,  186 => 111,  179 => 107,  171 => 102,  166 => 100,  156 => 93,  152 => 92,  147 => 90,  135 => 81,  127 => 76,  121 => 75,  114 => 71,  109 => 69,  104 => 67,  97 => 63,  92 => 61,  88 => 60,  78 => 53,  74 => 52,  69 => 50,  56 => 40,  51 => 38,  43 => 33,  38 => 32,  31 => 22,  29 => 21,  26 => 20,  23 => 18,  19 => 11,);
    }
}
