<?php

/* @WebProfiler/Collector/form.html.twig */
class __TwigTemplate_803b82aaa130f1e9afe4a01fe5b017bbf0dffe8617241c8bb19f6619d95b6888 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["__internal_344266ca2a8c82d05b4347878f58ef35ffce48ac11c110f0fd13420c67ee9cf7"] = $this;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "data", array()))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            <img width=\"20\" height=\"28\" alt=\"Forms\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcAQMAAABbFA0jAAAABlBMVEUAAAA+Pj4LNneDAAAAAXRSTlMAQObYZgAAACxJREFUCNdjYEACjD8gmP8/A8P7/wVw/IChgOH//w9w/AHKf4CLRlILwkgAANMJMNaUFdtJAAAAAElFTkSuQmCC\"/>
            <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 9
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "collector"), "data", array()), "nb_errors", array())) {
                echo "red";
            } else {
                echo "green";
            }
            echo "\">";
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "collector"), "data", array()), "nb_errors", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "collector"), "data", array()), "nb_errors", array()), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "collector"), "data", array()), "forms", array())), "html", null, true);
            }
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 11
            echo "
        ";
            // line 12
            $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => $this->getContext($context, "profiler_url"))));
            // line 13
            echo "    ";
        }
    }

    // line 16
    public function block_menu($context, array $blocks = array())
    {
        // line 17
        echo "    <span class=\"label\">
        <span class=\"icon\"><img src=\"data:image/png;base64,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\" alt=\"\"/></span>
        <strong>Forms</strong>
        ";
        // line 20
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "collector"), "data", array()), "forms", array()))) {
            // line 21
            echo "            <span class=\"count\"><span>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "collector"), "data", array()), "forms", array())), "html", null, true);
            echo "</span></span>
        ";
        }
        // line 23
        echo "    </span>
";
    }

    // line 26
    public function block_panel($context, array $blocks = array())
    {
        // line 27
        echo "    <style type=\"text/css\">
    .window {
        /*background: #F6F6F6;*/
        margin: -30px -40px -40px;
    }
    .toggle-icon {
        display: inline-block;
        background: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAgBAMAAADpp+X/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDgwx4LcKwAAAABVQTFRFAAAA////////////////ZmZm////bvjBwAAAAAV0Uk5TABZwsuCVEUjgAAAAAWJLR0QF+G/pxwAAAE1JREFUGNNjSHMSYGBgUEljSGYAAzMGBwiDhUEBwmBiEIAwGBmwgTQgQGWgA7h2uIFwK+CWwp1BpHvYEqDuATEYkBlY3IOmBq6dCPcAAIT5Eg2IksjQAAAAAElFTkSuQmCC\") no-repeat top left #5eb5e0;
    }
    .closed .toggle-icon, .closed.toggle-icon {
        background-position: bottom left;
    }
    .toggle-icon.empty {
        background-image: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABmJLR0QAZgBmAGYHukptAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDhIf6CA40AAAAFRJREFUOMvtk7ENACEMA61vfx767MROWfO+AdGBHlNyTZrYUZRYDBII4NWE1pNdpFarfgLUbpDaBEgBYRiEVjsvDLa1l6O4Z3wkFWN+OfLKdpisOH/TlICzukmUJwAAAABJRU5ErkJggg==\");
    }
    .tree {
        width: 230px;
        padding: 10px;
        font-size: 12px;
        float: left;
    }
    #content .tree h2 {
        font-size: 13px;
        padding: 5px 7px;
        margin: 0;
    }
    .tree li {
        margin: 0;
        padding: 0;
        width: 100%;
    }
    .tree .tree-inner {
        width: 100%;
        padding: 5px 7px 5px 22px;
        border-radius: 6px;
        color: #313131;
        cursor: pointer;
        position: relative;

        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    .tree a {
        text-decoration: none;
    }
    .tree .toggle-button {
        /* provide a bigger clickable area than just 10x10px */
        width: 16px;
        height: 16px;
        /* vertically center the button */
        position: absolute;
        top: 50%;
        margin-top: -8px;
        margin-left: -18px;
    }
    .tree .toggle-icon {
        width: 10px;
        height: 10px;
        /* position the icon in the center of the clickable area */
        margin-left: 3px;
        margin-top: 3px;
        background-size: 10px 20px;
        background-color: #ccc;
    }
    .tree .toggle-icon.empty {
        width: 10px;
        height: 10px;
        position: absolute;
        top: 50%;
        margin-top: -5px;
        margin-left: -15px;
        background-size: 10px 10px;
    }
    .tree ul ul .tree-inner {
        padding-left: 37px;
    }
    .tree ul ul ul .tree-inner {
        padding-left: 52px;
    }
    .tree ul ul ul ul .tree-inner {
        padding-left: 67px;
    }
    .tree ul ul ul ul ul .tree-inner {
        padding-left: 82px;
    }
    .tree .tree-inner:hover {
        background: #dfdfdf;
    }
    .tree .tree-inner.active, .tree .tree-inner.active:hover {
        background: #dfdfdf;
        font-weight: bold;
        color: #313131;
    }
    .tree .tree-inner.active .toggle-icon, .tree .tree-inner:hover .toggle-icon, .tree .tree-inner.active:hover .toggle-icon {
        background-image: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAgBAMAAADpp+X/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDhEYXWn+sAAAABhQTFRFAAAA39/f39/f39/f39/fZmZm39/f////gc3YPwAAAAV0Uk5TAAtAc6ZeVyCYAAAAAWJLR0QF+G/pxwAAAE1JREFUGNNjSHMSYGBgUEljSGYAAzMGBwiDhUEBwmBiEIAwGBmwgXIgQGWgA7h2uIFwK+CWwp1BpHvYC6DuATEYkBlY3IOmBq6dCPcAADqLE4MnBi/fAAAAAElFTkSuQmCC\");
        background-color: #aaa;
    }
    .tree .tree-inner.active .toggle-icon.empty, .tree .tree-inner:hover .toggle-icon.empty, .tree .tree-inner.active:hover .toggle-icon.empty {
        background-image: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQBAMAAADt3eJSAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDhoucSey4gAAABVQTFRFAAAA39/f39/f39/f39/fZmZm39/fD5Dx2AAAAAV0Uk5TAAtAc6ZeVyCYAAAAAWJLR0QF+G/pxwAAADJJREFUCNdjSHMSYGBgUEljSGYAAzMGBwiDhUEBwmBiEIAwGBnIA3DtcAPhVsAthTkDAFOfBKW9C1iqAAAAAElFTkSuQmCC\");
    }
    .tree-details {
        border-left: 1px solid #dfdfdf;
        background: white;
        margin-left: 250px;
        padding: 30px 40px 40px;
    }
    .tree-details h3 {
        position: relative;
    }
    .tree-details .toggle-icon {
        width: 16px;
        height: 16px;
        /* vertically center the button */
        position: absolute;
        top: 50%;
        margin-top: -9px;
        margin-left: 6px;
    }
    .form-type {
        color: #999999;
    }
    .hidden {
        display: none;
    }
    .badge-error {
        float: right;
        background: #a33;
        color: #fff;
        padding: 1px 4px;
        font-size: 10px;
        font-weight: bold;
        vertical-align: middle;
        border-radius: 6px;
    }
    .errors h3 {
        color: #800;
    }
    .errors th, .errors td {
        border-color: #800;
    }
    .errors th {
        background: #a33;
        color: #fff;
    }
    .errors .toggle-icon {
        background-color: #a33;
    }
    h3 a, h3 a:hover, h3 a:focus {
        color: inherit;
        text-decoration: inherit;
    }
    </style>

    ";
        // line 181
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "collector"), "data", array()), "forms", array()))) {
            // line 182
            echo "        <div class=\"window\">
            <div class=\"tree\">
                <h2>Forms</h2>

                <ul>
                ";
            // line 187
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "collector"), "data", array()), "forms", array()));
            foreach ($context['_seq'] as $context["formName"] => $context["formData"]) {
                // line 188
                echo "                    ";
                echo $context["__internal_344266ca2a8c82d05b4347878f58ef35ffce48ac11c110f0fd13420c67ee9cf7"]->getform_tree_entry($context["formName"], $context["formData"], true);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['formName'], $context['formData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo "                </ul>
            </div>

            ";
            // line 193
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "collector"), "data", array()), "forms", array()));
            foreach ($context['_seq'] as $context["formName"] => $context["formData"]) {
                // line 194
                echo "                ";
                echo $context["__internal_344266ca2a8c82d05b4347878f58ef35ffce48ac11c110f0fd13420c67ee9cf7"]->getform_tree_details($context["formName"], $context["formData"], $this->getAttribute($this->getAttribute($this->getContext($context, "collector"), "data", array()), "forms_by_hash", array()));
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['formName'], $context['formData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 196
            echo "        </div>
    ";
        } else {
            // line 198
            echo "        <p><em>No forms were submitted for this request.</em></p>
    ";
        }
        // line 200
        echo "
    <script>
    function Toggler(storage) {
        \"use strict\";

        var STORAGE_KEY = 'sf_toggle_data',

            states = {},

            isCollapsed = function (button) {
                return Sfjs.hasClass(button, 'closed');
            },

            isExpanded = function (button) {
                return !isCollapsed(button);
            },

            expand = function (button) {
                var targetId = button.dataset.toggleTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Toggle target \" + targetId + \" does not exist\";
                }

                if (isCollapsed(button)) {
                    Sfjs.removeClass(button, 'closed');
                    Sfjs.removeClass(target, 'hidden');

                    states[targetId] = 1;
                    storage.setItem(STORAGE_KEY, states);
                }
            },

            collapse = function (button) {
                var targetId = button.dataset.toggleTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Toggle target \" + targetId + \" does not exist\";
                }

                if (isExpanded(button)) {
                    Sfjs.addClass(button, 'closed');
                    Sfjs.addClass(target, 'hidden');

                    states[targetId] = 0;
                    storage.setItem(STORAGE_KEY, states);
                }
            },

            toggle = function (button) {
                if (Sfjs.hasClass(button, 'closed')) {
                    expand(button);
                } else {
                    collapse(button);
                }
            },

            initButtons = function (buttons) {
                states = storage.getItem(STORAGE_KEY, {});

                // must be an object, not an array or anything else
                // `typeof` returns \"object\" also for arrays, so the following
                // check must be done
                // see http://stackoverflow.com/questions/4775722/check-if-object-is-array
                if ('[object Object]' !== Object.prototype.toString.call(states)) {
                    states = {};
                }

                for (var i = 0, l = buttons.length; i < l; ++i) {
                    var targetId = buttons[i].dataset.toggleTargetId,
                        target = document.getElementById(targetId);

                    if (!target) {
                        throw \"Toggle target \" + targetId + \" does not exist\";
                    }

                    // correct the initial state of the button
                    if (Sfjs.hasClass(target, 'hidden')) {
                        Sfjs.addClass(buttons[i], 'closed');
                    }

                    // attach listener for expanding/collapsing the target
                    buttons[i].addEventListener('click', function (e) {
                        toggle(this);

                        e.preventDefault();
                        e.stopPropagation();

                        return false;
                    });

                    if (states.hasOwnProperty(targetId)) {
                        // open or collapse based on stored data
                        if (0 === states[targetId]) {
                            collapse(buttons[i]);
                        } else {
                            expand(buttons[i]);
                        }
                    }
                }
            };

        return {
            initButtons: initButtons,

            toggle: toggle,

            isExpanded: isExpanded,

            isCollapsed: isCollapsed,

            expand: expand,

            collapse: collapse
        };
    }

    function JsonStorage(storage) {
        var setItem = function (key, data) {
                storage.setItem(key, JSON.stringify(data));
            },

            getItem = function (key, defaultValue) {
                var data = storage.getItem(key);

                if (null !== data) {
                    try {
                        return JSON.parse(data);
                    } catch(e) {
                    }
                }

                return defaultValue;
            };

        return {
            setItem: setItem,

            getItem: getItem
        };
    }

    function TabView() {
        \"use strict\";

        var activeTab = null,

            activeTarget = null,

            select = function (tab) {
                var targetId = tab.dataset.tabTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Tab target \" + targetId + \" does not exist\";
                }

                if (activeTab) {
                    Sfjs.removeClass(activeTab, 'active');
                }

                if (activeTarget) {
                    Sfjs.addClass(activeTarget, 'hidden');
                }

                Sfjs.addClass(tab, 'active');
                Sfjs.removeClass(target, 'hidden');

                activeTab = tab;
                activeTarget = target;
            },

            initTabs = function (tabs) {
                for (var i = 0, l = tabs.length; i < l; ++i) {
                    var targetId = tabs[i].dataset.tabTargetId,
                        target = document.getElementById(targetId);

                    if (!target) {
                        throw \"Tab target \" + targetId + \" does not exist\";
                    }

                    tabs[i].addEventListener('click', function (e) {
                        select(this);

                        e.preventDefault();
                        e.stopPropagation();

                        return false;
                    });

                    Sfjs.addClass(target, 'hidden');
                }

                if (tabs.length > 0) {
                    select(tabs[0]);
                }
            };

        return {
            initTabs: initTabs,

            select: select
        };
    }

    var tabTarget = new TabView(),
        toggler = new Toggler(new JsonStorage(sessionStorage));

    tabTarget.initTabs(document.querySelectorAll('.tree .tree-inner'));
    toggler.initButtons(document.querySelectorAll('a.toggle-button'));
    </script>
";
    }

    // line 415
    public function getform_tree_entry($__name__ = null, $__data__ = null, $__expanded__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "data" => $__data__,
            "expanded" => $__expanded__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 416
            echo "    <li>
        <div class=\"tree-inner\" data-tab-target-id=\"";
            // line 417
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "id", array()), "html", null, true);
            echo "-details\">
            ";
            // line 418
            if ((!twig_test_empty($this->getAttribute($this->getContext($context, "data"), "children", array())))) {
                // line 419
                echo "                <a class=\"toggle-button\" data-toggle-target-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "id", array()), "html", null, true);
                echo "-children\" href=\"#\"><span class=\"toggle-icon\"></span></a>
            ";
            } else {
                // line 421
                echo "                <div class=\"toggle-icon empty\"></div>
            ";
            }
            // line 423
            echo "            ";
            echo twig_escape_filter($this->env, ((array_key_exists("name", $context)) ? (_twig_default_filter($this->getContext($context, "name"), "(no name)")) : ("(no name)")), "html", null, true);
            echo "
            ";
            // line 424
            if (($this->getAttribute($this->getContext($context, "data", true), "errors", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "errors", array())) > 0))) {
                // line 425
                echo "            <div class=\"badge-error\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "errors", array())), "html", null, true);
                echo "</div>
            ";
            }
            // line 427
            echo "        </div>

        ";
            // line 429
            if ((!twig_test_empty($this->getAttribute($this->getContext($context, "data"), "children", array())))) {
                // line 430
                echo "            <ul id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "id", array()), "html", null, true);
                echo "-children\"";
                if ((!$this->getContext($context, "expanded"))) {
                    echo " class=\"hidden\"";
                }
                echo ">
                ";
                // line 431
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "data"), "children", array()));
                foreach ($context['_seq'] as $context["childName"] => $context["childData"]) {
                    // line 432
                    echo "                    ";
                    echo $this->getAttribute($this, "form_tree_entry", array(0 => $context["childName"], 1 => $context["childData"], 2 => false), "method");
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['childName'], $context['childData'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 434
                echo "            </ul>
        ";
            }
            // line 436
            echo "    </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 439
    public function getform_tree_details($__name__ = null, $__data__ = null, $__forms_by_hash__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "data" => $__data__,
            "forms_by_hash" => $__forms_by_hash__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 440
            echo "    <div class=\"tree-details\" ";
            if ($this->getAttribute($this->getContext($context, "data", true), "id", array(), "any", true, true)) {
                echo " id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "id", array()), "html", null, true);
                echo "-details\"";
            }
            echo ">
        <h2>
            ";
            // line 442
            echo twig_escape_filter($this->env, ((array_key_exists("name", $context)) ? (_twig_default_filter($this->getContext($context, "name"), "(no name)")) : ("(no name)")), "html", null, true);
            echo "
            ";
            // line 443
            if ($this->getAttribute($this->getContext($context, "data", true), "type_class", array(), "any", true, true)) {
                // line 444
                echo "            <span class=\"form-type\">[<abbr title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "type_class", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "type", array()), "html", null, true);
                echo "</abbr>]</span>
            ";
            }
            // line 446
            echo "        </h2>

        ";
            // line 448
            if (($this->getAttribute($this->getContext($context, "data", true), "errors", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "errors", array())) > 0))) {
                // line 449
                echo "        <div class=\"errors\">
            <h3>
                <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 451
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "id", array()), "html", null, true);
                echo "-errors\" href=\"#\">
                    Errors
                    <span class=\"toggle-icon\"></span>
                </a>
            </h3>

            <table id=\"";
                // line 457
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "id", array()), "html", null, true);
                echo "-errors\">
                <tr>
                    <th>Message</th>
                    <th>Origin</th>
                    <th>Cause</th>
                </tr>
                ";
                // line 463
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "data"), "errors", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 464
                    echo "                <tr>
                    <td>";
                    // line 465
                    echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                    echo "</td>
                    <td>
                        ";
                    // line 467
                    if (twig_test_empty($this->getAttribute($context["error"], "origin", array()))) {
                        // line 468
                        echo "                            <em>This form.</em>
                        ";
                    } elseif ((!$this->getAttribute($this->getContext($context, "forms_by_hash", true), $this->getAttribute($context["error"], "origin", array()), array(), "array", true, true))) {
                        // line 470
                        echo "                            <em>Unknown.</em>
                        ";
                    } else {
                        // line 472
                        echo "                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "forms_by_hash"), $this->getAttribute($context["error"], "origin", array()), array(), "array"), "name", array()), "html", null, true);
                        echo "
                        ";
                    }
                    // line 474
                    echo "                    </td>
                    <td>
                        ";
                    // line 476
                    if (twig_test_empty($this->getAttribute($context["error"], "cause", array()))) {
                        // line 477
                        echo "                            <em>Unknown.</em>
                        ";
                    } elseif ($this->getAttribute($this->getAttribute($context["error"], "cause", array(), "any", false, true), "root", array(), "any", true, true)) {
                        // line 479
                        echo "                            <strong>Constraint Violation</strong><br/>
                            <pre>";
                        // line 480
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["error"], "cause", array()), "root", array()), "html", null, true);
                        if ((!twig_test_empty($this->getAttribute($this->getAttribute($context["error"], "cause", array()), "path", array())))) {
                            if ((twig_first($this->env, $this->getAttribute($this->getAttribute($context["error"], "cause", array()), "path", array())) != "[")) {
                                echo ".";
                            }
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["error"], "cause", array()), "path", array()), "html", null, true);
                        }
                        echo " = ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["error"], "cause", array()), "value", array()), "html", null, true);
                        echo "</pre>
                        ";
                    } else {
                        // line 482
                        echo "                            <pre>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "cause", array()), "html", null, true);
                        echo "</pre>
                        ";
                    }
                    // line 484
                    echo "                    </td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 487
                echo "            </table>
        </div>
        ";
            }
            // line 490
            echo "
        ";
            // line 491
            if ($this->getAttribute($this->getContext($context, "data", true), "default_data", array(), "any", true, true)) {
                // line 492
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 493
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "id", array()), "html", null, true);
                echo "-default_data\" href=\"#\">
                Default Data
                <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 499
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "id", array()), "html", null, true);
                echo "-default_data\">
            <table>
                <tr>
                    <th width=\"180\">Model Format</th>
                    <td>
                        ";
                // line 504
                if ($this->getAttribute($this->getAttribute($this->getContext($context, "data", true), "default_data", array(), "any", false, true), "model", array(), "any", true, true)) {
                    // line 505
                    echo "                            <pre>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "data"), "default_data", array()), "model", array()), "html", null, true);
                    echo "</pre>
                        ";
                } else {
                    // line 507
                    echo "                            <em>same as normalized format</em>
                        ";
                }
                // line 509
                echo "                    </td>
                </tr>
                <tr>
                    <th>Normalized Format</th>
                    <td><pre>";
                // line 513
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "data"), "default_data", array()), "norm", array()), "html", null, true);
                echo "</pre></td>
                </tr>
                <tr>
                    <th>View Format</th>
                    <td>
                        ";
                // line 518
                if ($this->getAttribute($this->getAttribute($this->getContext($context, "data", true), "default_data", array(), "any", false, true), "view", array(), "any", true, true)) {
                    // line 519
                    echo "                            <pre>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "data"), "default_data", array()), "view", array()), "html", null, true);
                    echo "</pre>
                        ";
                } else {
                    // line 521
                    echo "                            <em>same as normalized format</em>
                        ";
                }
                // line 523
                echo "                    </td>
                </tr>
            </table>
        </div>
        ";
            }
            // line 528
            echo "
        ";
            // line 529
            if ($this->getAttribute($this->getContext($context, "data", true), "submitted_data", array(), "any", true, true)) {
                // line 530
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 531
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "id", array()), "html", null, true);
                echo "-submitted_data\" href=\"#\">
                Submitted Data
                <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 537
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "id", array()), "html", null, true);
                echo "-submitted_data\">
        ";
                // line 538
                if ($this->getAttribute($this->getAttribute($this->getContext($context, "data", true), "submitted_data", array(), "any", false, true), "norm", array(), "any", true, true)) {
                    // line 539
                    echo "            <table>
                <tr>
                    <th width=\"180\">View Format</th>
                    <td>
                        ";
                    // line 543
                    if ($this->getAttribute($this->getAttribute($this->getContext($context, "data", true), "submitted_data", array(), "any", false, true), "view", array(), "any", true, true)) {
                        // line 544
                        echo "                            <pre>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "data"), "submitted_data", array()), "view", array()), "html", null, true);
                        echo "</pre>
                        ";
                    } else {
                        // line 546
                        echo "                            <em>same as normalized format</em>
                        ";
                    }
                    // line 548
                    echo "                    </td>
                </tr>
                <tr>
                    <th>Normalized Format</th>
                    <td><pre>";
                    // line 552
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "data"), "submitted_data", array()), "norm", array()), "html", null, true);
                    echo "</pre></td>
                </tr>
                <tr>
                    <th>Model Format</th>
                    <td>
                        ";
                    // line 557
                    if ($this->getAttribute($this->getAttribute($this->getContext($context, "data", true), "submitted_data", array(), "any", false, true), "model", array(), "any", true, true)) {
                        // line 558
                        echo "                            <pre>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "data"), "submitted_data", array()), "model", array()), "html", null, true);
                        echo "</pre>
                        ";
                    } else {
                        // line 560
                        echo "                            <em>same as normalized format</em>
                        ";
                    }
                    // line 562
                    echo "                    </td>
                </tr>
            </table>
        ";
                } else {
                    // line 566
                    echo "            <p><em>This form was not submitted.</em></p>
        ";
                }
                // line 568
                echo "        </div>
        ";
            }
            // line 570
            echo "
        ";
            // line 571
            if ($this->getAttribute($this->getContext($context, "data", true), "passed_options", array(), "any", true, true)) {
                // line 572
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 573
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "id", array()), "html", null, true);
                echo "-passed_options\" href=\"#\">
                Passed Options
                <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 579
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "id", array()), "html", null, true);
                echo "-passed_options\">
            ";
                // line 580
                if (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "passed_options", array()))) {
                    // line 581
                    echo "            <table>
                <tr>
                    <th width=\"180\">Option</th>
                    <th>Passed Value</th>
                    <th>Resolved Value</th>
                </tr>
                ";
                    // line 587
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "data"), "passed_options", array()));
                    foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                        // line 588
                        echo "                <tr>
                    <th>";
                        // line 589
                        echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                        echo "</th>
                    <td><pre>";
                        // line 590
                        echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                        echo "</pre></td>
                    <td>
                        ";
                        // line 592
                        if (($this->getAttribute($this->getAttribute($this->getContext($context, "data"), "resolved_options", array()), $context["option"], array(), "array") === $context["value"])) {
                            // line 593
                            echo "                            <em>same as passed value</em>
                        ";
                        } else {
                            // line 595
                            echo "                            <pre>";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "data"), "resolved_options", array()), $context["option"], array(), "array"), "html", null, true);
                            echo "</pre>
                        ";
                        }
                        // line 597
                        echo "                    </td>
                </tr>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 600
                    echo "            </table>
            ";
                } else {
                    // line 602
                    echo "            <p><em>No options where passed when constructing this form.</em></p>
            ";
                }
                // line 604
                echo "        </div>
        ";
            }
            // line 606
            echo "
        ";
            // line 607
            if ($this->getAttribute($this->getContext($context, "data", true), "resolved_options", array(), "any", true, true)) {
                // line 608
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 609
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "id", array()), "html", null, true);
                echo "-resolved_options\" href=\"#\">
                Resolved Options
                <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 615
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "id", array()), "html", null, true);
                echo "-resolved_options\" class=\"hidden\">
            <table>
                <tr>
                    <th width=\"180\">Option</th>
                    <th>Value</th>
                </tr>
                ";
                // line 621
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "data"), "resolved_options", array()));
                foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                    // line 622
                    echo "                <tr>
                    <th>";
                    // line 623
                    echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                    echo "</th>
                    <td><pre>";
                    // line 624
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "</pre></td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 627
                echo "            </table>
        </div>
        ";
            }
            // line 630
            echo "
        ";
            // line 631
            if ($this->getAttribute($this->getContext($context, "data", true), "view_vars", array(), "any", true, true)) {
                // line 632
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 633
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "id", array()), "html", null, true);
                echo "-view_vars\" href=\"#\">
                View Variables
                <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 639
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "id", array()), "html", null, true);
                echo "-view_vars\" class=\"hidden\">
            <table>
                <tr>
                    <th width=\"180\">Variable</th>
                    <th>Value</th>
                </tr>
                ";
                // line 645
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "data"), "view_vars", array()));
                foreach ($context['_seq'] as $context["variable"] => $context["value"]) {
                    // line 646
                    echo "                <tr>
                    <th>";
                    // line 647
                    echo twig_escape_filter($this->env, $context["variable"], "html", null, true);
                    echo "</th>
                    <td><pre>";
                    // line 648
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "</pre></td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['variable'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 651
                echo "            </table>
        </div>
        ";
            }
            // line 654
            echo "    </div>

    ";
            // line 656
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "data"), "children", array()));
            foreach ($context['_seq'] as $context["childName"] => $context["childData"]) {
                // line 657
                echo "        ";
                echo $this->getAttribute($this, "form_tree_details", array(0 => $context["childName"], 1 => $context["childData"], 2 => $this->getContext($context, "forms_by_hash")), "method");
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['childName'], $context['childData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1081 => 657,  1077 => 656,  1073 => 654,  1068 => 651,  1059 => 648,  1055 => 647,  1052 => 646,  1048 => 645,  1039 => 639,  1030 => 633,  1027 => 632,  1025 => 631,  1022 => 630,  1017 => 627,  1008 => 624,  1004 => 623,  1001 => 622,  997 => 621,  988 => 615,  979 => 609,  976 => 608,  974 => 607,  971 => 606,  967 => 604,  963 => 602,  959 => 600,  951 => 597,  945 => 595,  941 => 593,  939 => 592,  934 => 590,  930 => 589,  927 => 588,  923 => 587,  915 => 581,  913 => 580,  909 => 579,  900 => 573,  897 => 572,  895 => 571,  892 => 570,  888 => 568,  884 => 566,  878 => 562,  874 => 560,  868 => 558,  866 => 557,  858 => 552,  852 => 548,  848 => 546,  842 => 544,  840 => 543,  834 => 539,  832 => 538,  828 => 537,  819 => 531,  816 => 530,  814 => 529,  811 => 528,  804 => 523,  800 => 521,  794 => 519,  792 => 518,  784 => 513,  778 => 509,  774 => 507,  768 => 505,  766 => 504,  758 => 499,  749 => 493,  746 => 492,  744 => 491,  741 => 490,  736 => 487,  728 => 484,  722 => 482,  709 => 480,  706 => 479,  702 => 477,  700 => 476,  696 => 474,  690 => 472,  686 => 470,  682 => 468,  680 => 467,  675 => 465,  672 => 464,  668 => 463,  659 => 457,  650 => 451,  646 => 449,  644 => 448,  640 => 446,  632 => 444,  630 => 443,  626 => 442,  616 => 440,  603 => 439,  591 => 436,  587 => 434,  578 => 432,  574 => 431,  565 => 430,  563 => 429,  559 => 427,  553 => 425,  551 => 424,  546 => 423,  542 => 421,  536 => 419,  534 => 418,  530 => 417,  527 => 416,  514 => 415,  297 => 200,  293 => 198,  289 => 196,  280 => 194,  276 => 193,  271 => 190,  262 => 188,  258 => 187,  251 => 182,  249 => 181,  93 => 27,  90 => 26,  85 => 23,  79 => 21,  77 => 20,  72 => 17,  69 => 16,  64 => 13,  62 => 12,  59 => 11,  44 => 9,  41 => 8,  38 => 7,  35 => 6,  32 => 5,  27 => 3,);
    }
}
