<?php

/* OroUIBundle:Default:generalElements.html.twig */
class __TwigTemplate_ea8c4633aa6535e6626e1efe5c63ec6a039d4a0b2669834a54be4efe2c10475d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:Default:index.html.twig", "OroUIBundle:Default:generalElements.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"container-fluid wb\">
    <div class=\"row-fluid one-column\">
    <div class=\"container-fluid\">
    <p class=\"muted\">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
    <p class=\"text-warning\">Etiam porta sem malesuada magna mollis euismod.</p>
    <p class=\"text-error\">Donec ullamcorper nulla non metus auctor fringilla.</p>
    <p class=\"text-info\">Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis.</p>
    <p class=\"text-success\">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
    <hr />
    <blockquote>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
    </blockquote>
    <hr />
    <div class=\"form-row\">
        <ul>
            <li>Lorem ipsum dolor sit amet</li>
            <li>Consectetur adipiscing elit</li>
            <li>Integer molestie lorem at massa</li>
            <li>Facilisis in pretium nisl aliquet</li>
            <li>Nulla volutpat aliquam velit
                <ul>
                    <li>Phasellus iaculis neque</li>
                    <li>Purus sodales ultricies</li>
                    <li>Vestibulum laoreet porttitor sem</li>
                    <li>Ac tristique libero volutpat at</li>
                </ul>
            </li>
            <li>Faucibus porta lacus fringilla vel</li>
            <li>Aenean sit amet erat nunc</li>
            <li>Eget porttitor lorem</li>
        </ul>
        <ul class=\"unstyled\">
            <li>Lorem ipsum dolor sit amet</li>
            <li>Consectetur adipiscing elit</li>
            <li>Integer molestie lorem at massa</li>
            <li>Facilisis in pretium nisl aliquet</li>
            <li>Nulla volutpat aliquam velit
                <ul>
                    <li>Phasellus iaculis neque</li>
                    <li>Purus sodales ultricies</li>
                    <li>Vestibulum laoreet porttitor sem</li>
                    <li>Ac tristique libero volutpat at</li>
                </ul>
            </li>
            <li>Faucibus porta lacus fringilla vel</li>
            <li>Aenean sit amet erat nunc</li>
            <li>Eget porttitor lorem</li>
        </ul>
        <ul class=\"inline\">
            <li>Lorem ipsum</li>
            <li>Phasellus iaculis</li>
            <li>Nulla volutpat</li>
        </ul>
        <hr />
        <dl class=\"form-row\">
            <dt>Description lists</dt>
            <dd>A description list is perfect for defining terms.</dd>
            <dt>Euismod</dt>
            <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
            <dd>Donec id elit non mi porta gravida at eget metus.</dd>
            <dt>Malesuada porta</dt>
            <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
        </dl>
        <dl class=\"dl-horizontal\">
            <dt>Description lists</dt>
            <dd>A description list is perfect for defining terms.</dd>
            <dt>Euismod</dt>
            <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
            <dd>Donec id elit non mi porta gravida at eget metus.</dd>
            <dt>Malesuada porta</dt>
            <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
            <dt>Felis euismod semper eget lacinia</dt>
            <dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
        </dl>
    </div>
    <hr />
    <ul style=\"margin-bottom: 5px;\" class=\"breadcrumb\">
        <li><a href=\"#\">Home</a> <span class=\"divider\">/</span></li>
        <li><a href=\"#\">Library</a> <span class=\"divider\">/</span></li>
        <li class=\"active\">Data</li>
    </ul>
    <hr />
    <div class=\"progress\">
        <div style=\"width: 35%\" class=\"bar bar-success\"></div>
        <div style=\"width: 20%\" class=\"bar bar-warning\"></div>
        <div style=\"width: 10%\" class=\"bar bar-danger\"></div>
    </div>
    <hr />
    <div class=\"bs-docs-example\">
        <div style=\"margin-bottom: 9px;\" class=\"progress progress-info\">
            <div style=\"width: 20%\" class=\"bar\"></div>
        </div>
        <div style=\"margin-bottom: 9px;\" class=\"progress progress-success\">
            <div style=\"width: 40%\" class=\"bar\"></div>
        </div>
        <div style=\"margin-bottom: 9px;\" class=\"progress progress-warning\">
            <div style=\"width: 60%\" class=\"bar\"></div>
        </div>
        <div class=\"progress progress-danger\">
            <div style=\"width: 80%\" class=\"bar\"></div>
        </div>
    </div>
    <hr />
    <div class=\"bs-docs-example\">
        <div style=\"margin-bottom: 9px;\" class=\"progress progress-info progress-striped\">
            <div style=\"width: 20%\" class=\"bar\"></div>
        </div>
        <div style=\"margin-bottom: 9px;\" class=\"progress progress-success progress-striped\">
            <div style=\"width: 40%\" class=\"bar\"></div>
        </div>
        <div style=\"margin-bottom: 9px;\" class=\"progress progress-warning progress-striped\">
            <div style=\"width: 60%\" class=\"bar\"></div>
        </div>
        <div class=\"progress progress-danger progress-striped\">
            <div style=\"width: 80%\" class=\"bar\"></div>
        </div>
    </div>
    <hr />
    <h4>.pull-left</h4>
    <h4>.pull-right</h4>
    <ul class=\"media-list\">
        <li class=\"media\">
            <a href=\"#\" class=\"pull-left\">
                <img data-src=\"holder.js/64x64\" class=\"media-object\" alt=\"64x64\" style=\"width: 64px; height: 64px;\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAABUUlEQVR4nO2UMW7DMAxFc/+jcObqUbsOwDPwCurEQFXsoojgPBT9wxsSO8TTk6JHZo7/zIMWoFEAWoBGAWgBGgWgBWgUgBagUQBagEYBaAEaBaAFaBSAFqBRAFqARgFoARoFoAVoFIAWoNkO0FobZjbMbBzHcfqOmQ13R2feEqBEM3P03oeZjd776Tu/lb1j5m0B3P1yhzJzRMRzJ2dZd39ZZGttayYSoI5oCdUi1kDu/k22FlG/nZ+9OxMLcHVc63NEnMrOi5yP+M5M7ASsu1rP5mO9ytb76/c7Mz8eYP2/lmzt1MrZPbAe852ZHw9Qt3FEXN7YZ7tVv+u9P0NExNZMJEBm/nhhXcnOO7ce83dnYgH+OgpAC9AoAC1AowC0AI0C0AI0CkAL0CgALUCjALQAjQLQAjQKQAvQKAAtQKMAtACNAtACNApAC9AoAC1A8wVF0yPpFTYpPwAAAABJRU5ErkJggg==\">
            </a>
            <div class=\"media-body\">
                <h4 class=\"media-heading\">Media heading</h4>
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                <!-- Nested media object -->
                <div class=\"media\">
                    <a href=\"#\" class=\"pull-left\">
                        <img data-src=\"holder.js/64x64\" class=\"media-object\" alt=\"64x64\" style=\"width: 64px; height: 64px;\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAABUUlEQVR4nO2UMW7DMAxFc/+jcObqUbsOwDPwCurEQFXsoojgPBT9wxsSO8TTk6JHZo7/zIMWoFEAWoBGAWgBGgWgBWgUgBagUQBagEYBaAEaBaAFaBSAFqBRAFqARgFoARoFoAVoFIAWoNkO0FobZjbMbBzHcfqOmQ13R2feEqBEM3P03oeZjd776Tu/lb1j5m0B3P1yhzJzRMRzJ2dZd39ZZGttayYSoI5oCdUi1kDu/k22FlG/nZ+9OxMLcHVc63NEnMrOi5yP+M5M7ASsu1rP5mO9ytb76/c7Mz8eYP2/lmzt1MrZPbAe852ZHw9Qt3FEXN7YZ7tVv+u9P0NExNZMJEBm/nhhXcnOO7ce83dnYgH+OgpAC9AoAC1AowC0AI0C0AI0CkAL0CgALUCjALQAjQLQAjQKQAvQKAAtQKMAtACNAtACNApAC9AoAC1A8wVF0yPpFTYpPwAAAABJRU5ErkJggg==\">
                    </a>
                    <div class=\"media-body\">
                        <h4 class=\"media-heading\">Nested media heading</h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                        <!-- Nested media object -->
                        <div class=\"media\">
                            <a href=\"#\" class=\"pull-left\">
                                <img data-src=\"holder.js/64x64\" class=\"media-object\" alt=\"64x64\" style=\"width: 64px; height: 64px;\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAABUUlEQVR4nO2UMW7DMAxFc/+jcObqUbsOwDPwCurEQFXsoojgPBT9wxsSO8TTk6JHZo7/zIMWoFEAWoBGAWgBGgWgBWgUgBagUQBagEYBaAEaBaAFaBSAFqBRAFqARgFoARoFoAVoFIAWoNkO0FobZjbMbBzHcfqOmQ13R2feEqBEM3P03oeZjd776Tu/lb1j5m0B3P1yhzJzRMRzJ2dZd39ZZGttayYSoI5oCdUi1kDu/k22FlG/nZ+9OxMLcHVc63NEnMrOi5yP+M5M7ASsu1rP5mO9ytb76/c7Mz8eYP2/lmzt1MrZPbAe852ZHw9Qt3FEXN7YZ7tVv+u9P0NExNZMJEBm/nhhXcnOO7ce83dnYgH+OgpAC9AoAC1AowC0AI0C0AI0CkAL0CgALUCjALQAjQLQAjQKQAvQKAAtQKMAtACNAtACNApAC9AoAC1A8wVF0yPpFTYpPwAAAABJRU5ErkJggg==\">
                            </a>
                            <div class=\"media-body\">
                                <h4 class=\"media-heading\">Nested media heading</h4>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Nested media object -->
                <div class=\"media\">
                    <a href=\"#\" class=\"pull-left\">
                        <img data-src=\"holder.js/64x64\" class=\"media-object\" alt=\"64x64\" style=\"width: 64px; height: 64px;\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAABUUlEQVR4nO2UMW7DMAxFc/+jcObqUbsOwDPwCurEQFXsoojgPBT9wxsSO8TTk6JHZo7/zIMWoFEAWoBGAWgBGgWgBWgUgBagUQBagEYBaAEaBaAFaBSAFqBRAFqARgFoARoFoAVoFIAWoNkO0FobZjbMbBzHcfqOmQ13R2feEqBEM3P03oeZjd776Tu/lb1j5m0B3P1yhzJzRMRzJ2dZd39ZZGttayYSoI5oCdUi1kDu/k22FlG/nZ+9OxMLcHVc63NEnMrOi5yP+M5M7ASsu1rP5mO9ytb76/c7Mz8eYP2/lmzt1MrZPbAe852ZHw9Qt3FEXN7YZ7tVv+u9P0NExNZMJEBm/nhhXcnOO7ce83dnYgH+OgpAC9AoAC1AowC0AI0C0AI0CkAL0CgALUCjALQAjQLQAjQKQAvQKAAtQKMAtACNAtACNApAC9AoAC1A8wVF0yPpFTYpPwAAAABJRU5ErkJggg==\">
                    </a>
                    <div class=\"media-body\">
                        <h4 class=\"media-heading\">Nested media heading</h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                    </div>
                </div>
            </div>
        </li>
        <li class=\"media\">
            <a href=\"#\" class=\"pull-right\">
                <img data-src=\"holder.js/64x64\" class=\"media-object\" alt=\"64x64\" style=\"width: 64px; height: 64px;\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAABUUlEQVR4nO2UMW7DMAxFc/+jcObqUbsOwDPwCurEQFXsoojgPBT9wxsSO8TTk6JHZo7/zIMWoFEAWoBGAWgBGgWgBWgUgBagUQBagEYBaAEaBaAFaBSAFqBRAFqARgFoARoFoAVoFIAWoNkO0FobZjbMbBzHcfqOmQ13R2feEqBEM3P03oeZjd776Tu/lb1j5m0B3P1yhzJzRMRzJ2dZd39ZZGttayYSoI5oCdUi1kDu/k22FlG/nZ+9OxMLcHVc63NEnMrOi5yP+M5M7ASsu1rP5mO9ytb76/c7Mz8eYP2/lmzt1MrZPbAe852ZHw9Qt3FEXN7YZ7tVv+u9P0NExNZMJEBm/nhhXcnOO7ce83dnYgH+OgpAC9AoAC1AowC0AI0C0AI0CkAL0CgALUCjALQAjQLQAjQKQAvQKAAtQKMAtACNAtACNApAC9AoAC1A8wVF0yPpFTYpPwAAAABJRU5ErkJggg==\">
            </a>
            <div class=\"media-body\">
                <h4 class=\"media-heading\">Media heading</h4>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
            </div>
        </li>
    </ul>
    <hr />
    <h3 class=\"title\">Paddigns</h3>
    <div class=\"bs-docs-example\">
        <div class=\"well well-small\">
            Look, I'm in a .well-small!
        </div>
    </div>
    <div class=\"well\">
        Look, I'm in a .well!
    </div>
    <div class=\"well well-large\">
        Look, I'm in a .well-large!
    </div>
    <div class=\"form-row\">
        Look, I'm in a .form-row!
    </div>
    <div class=\"hero-unit\">
        <h1>Hello, world!</h1>
        <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <p><a class=\"btn btn-primary btn-large\">Learn more</a></p>
    </div>
    <hr />
    <div class=\"form-row\">
        <table class=\"table table-bordered table-striped\">
            <thead>
            <tr>
                <th>Variable</th>
                <th>By default</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><code>@gridColumns</code></td>
                <td>12</td>
            </tr>
            <tr>
                <td><code>@gridColumnWidth</code></td>
                <td>60px</td>
            </tr>
            <tr>
                <td><code>@gridGutterWidth</code></td>
                <td>20px</td>
            </tr>
            <tr>
                <td><code>@bodyBackground</code></td>
                <td><span class=\"pull-left\">@white;</span><span class=\"example\" style=\"background: #fff;\"></span></td>
            </tr>
            <tr>
                <td><code>@textColor</code></td>
                <td><span class=\"pull-left\">@grayDark;</span><span class=\"example\" style=\"background: #333;\"></span></td>
            </tr>
            <tr>
                <td><code>@linkColor</code></td>
                <td><span class=\"pull-left\">#08c;</span><span class=\"example\" style=\"background: #08c\"></span></td>
            </tr>
            <tr>
                <td><code>@linkColorHover</code></td>
                <td><span class=\"pull-left\">darken(@linkColor, 15%);</span><span class=\"example\" style=\"background: #005580\"></span></td>
            </tr>
            <tr>
                <td><code>@baseFontSize</code></td>
                <td>14px;</td>
            </tr>
            <tr>
                <td><code>@baseFontFamily</code></td>
                <td>@sansFontFamily</td>
            </tr>
            <tr>
                <td><code>@baseLineHeight</code></td>
                <td>20px;</td>
            </tr>
            </tbody>
        </table>
    </div>
    </div>
    </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default:generalElements.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 5,  34 => 4,  29 => 2,  11 => 1,);
    }
}
/* {% extends "OroUIBundle:Default:index.html.twig" %}*/
/* {% block header %}*/
/* {% endblock %}*/
/* {% block content %}*/
/*     <div class="container-fluid wb">*/
/*     <div class="row-fluid one-column">*/
/*     <div class="container-fluid">*/
/*     <p class="muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>*/
/*     <p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>*/
/*     <p class="text-error">Donec ullamcorper nulla non metus auctor fringilla.</p>*/
/*     <p class="text-info">Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis.</p>*/
/*     <p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>*/
/*     <hr />*/
/*     <blockquote>*/
/*         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>*/
/*     </blockquote>*/
/*     <hr />*/
/*     <div class="form-row">*/
/*         <ul>*/
/*             <li>Lorem ipsum dolor sit amet</li>*/
/*             <li>Consectetur adipiscing elit</li>*/
/*             <li>Integer molestie lorem at massa</li>*/
/*             <li>Facilisis in pretium nisl aliquet</li>*/
/*             <li>Nulla volutpat aliquam velit*/
/*                 <ul>*/
/*                     <li>Phasellus iaculis neque</li>*/
/*                     <li>Purus sodales ultricies</li>*/
/*                     <li>Vestibulum laoreet porttitor sem</li>*/
/*                     <li>Ac tristique libero volutpat at</li>*/
/*                 </ul>*/
/*             </li>*/
/*             <li>Faucibus porta lacus fringilla vel</li>*/
/*             <li>Aenean sit amet erat nunc</li>*/
/*             <li>Eget porttitor lorem</li>*/
/*         </ul>*/
/*         <ul class="unstyled">*/
/*             <li>Lorem ipsum dolor sit amet</li>*/
/*             <li>Consectetur adipiscing elit</li>*/
/*             <li>Integer molestie lorem at massa</li>*/
/*             <li>Facilisis in pretium nisl aliquet</li>*/
/*             <li>Nulla volutpat aliquam velit*/
/*                 <ul>*/
/*                     <li>Phasellus iaculis neque</li>*/
/*                     <li>Purus sodales ultricies</li>*/
/*                     <li>Vestibulum laoreet porttitor sem</li>*/
/*                     <li>Ac tristique libero volutpat at</li>*/
/*                 </ul>*/
/*             </li>*/
/*             <li>Faucibus porta lacus fringilla vel</li>*/
/*             <li>Aenean sit amet erat nunc</li>*/
/*             <li>Eget porttitor lorem</li>*/
/*         </ul>*/
/*         <ul class="inline">*/
/*             <li>Lorem ipsum</li>*/
/*             <li>Phasellus iaculis</li>*/
/*             <li>Nulla volutpat</li>*/
/*         </ul>*/
/*         <hr />*/
/*         <dl class="form-row">*/
/*             <dt>Description lists</dt>*/
/*             <dd>A description list is perfect for defining terms.</dd>*/
/*             <dt>Euismod</dt>*/
/*             <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>*/
/*             <dd>Donec id elit non mi porta gravida at eget metus.</dd>*/
/*             <dt>Malesuada porta</dt>*/
/*             <dd>Etiam porta sem malesuada magna mollis euismod.</dd>*/
/*         </dl>*/
/*         <dl class="dl-horizontal">*/
/*             <dt>Description lists</dt>*/
/*             <dd>A description list is perfect for defining terms.</dd>*/
/*             <dt>Euismod</dt>*/
/*             <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>*/
/*             <dd>Donec id elit non mi porta gravida at eget metus.</dd>*/
/*             <dt>Malesuada porta</dt>*/
/*             <dd>Etiam porta sem malesuada magna mollis euismod.</dd>*/
/*             <dt>Felis euismod semper eget lacinia</dt>*/
/*             <dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>*/
/*         </dl>*/
/*     </div>*/
/*     <hr />*/
/*     <ul style="margin-bottom: 5px;" class="breadcrumb">*/
/*         <li><a href="#">Home</a> <span class="divider">/</span></li>*/
/*         <li><a href="#">Library</a> <span class="divider">/</span></li>*/
/*         <li class="active">Data</li>*/
/*     </ul>*/
/*     <hr />*/
/*     <div class="progress">*/
/*         <div style="width: 35%" class="bar bar-success"></div>*/
/*         <div style="width: 20%" class="bar bar-warning"></div>*/
/*         <div style="width: 10%" class="bar bar-danger"></div>*/
/*     </div>*/
/*     <hr />*/
/*     <div class="bs-docs-example">*/
/*         <div style="margin-bottom: 9px;" class="progress progress-info">*/
/*             <div style="width: 20%" class="bar"></div>*/
/*         </div>*/
/*         <div style="margin-bottom: 9px;" class="progress progress-success">*/
/*             <div style="width: 40%" class="bar"></div>*/
/*         </div>*/
/*         <div style="margin-bottom: 9px;" class="progress progress-warning">*/
/*             <div style="width: 60%" class="bar"></div>*/
/*         </div>*/
/*         <div class="progress progress-danger">*/
/*             <div style="width: 80%" class="bar"></div>*/
/*         </div>*/
/*     </div>*/
/*     <hr />*/
/*     <div class="bs-docs-example">*/
/*         <div style="margin-bottom: 9px;" class="progress progress-info progress-striped">*/
/*             <div style="width: 20%" class="bar"></div>*/
/*         </div>*/
/*         <div style="margin-bottom: 9px;" class="progress progress-success progress-striped">*/
/*             <div style="width: 40%" class="bar"></div>*/
/*         </div>*/
/*         <div style="margin-bottom: 9px;" class="progress progress-warning progress-striped">*/
/*             <div style="width: 60%" class="bar"></div>*/
/*         </div>*/
/*         <div class="progress progress-danger progress-striped">*/
/*             <div style="width: 80%" class="bar"></div>*/
/*         </div>*/
/*     </div>*/
/*     <hr />*/
/*     <h4>.pull-left</h4>*/
/*     <h4>.pull-right</h4>*/
/*     <ul class="media-list">*/
/*         <li class="media">*/
/*             <a href="#" class="pull-left">*/
/*                 <img data-src="holder.js/64x64" class="media-object" alt="64x64" style="width: 64px; height: 64px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAABUUlEQVR4nO2UMW7DMAxFc/+jcObqUbsOwDPwCurEQFXsoojgPBT9wxsSO8TTk6JHZo7/zIMWoFEAWoBGAWgBGgWgBWgUgBagUQBagEYBaAEaBaAFaBSAFqBRAFqARgFoARoFoAVoFIAWoNkO0FobZjbMbBzHcfqOmQ13R2feEqBEM3P03oeZjd776Tu/lb1j5m0B3P1yhzJzRMRzJ2dZd39ZZGttayYSoI5oCdUi1kDu/k22FlG/nZ+9OxMLcHVc63NEnMrOi5yP+M5M7ASsu1rP5mO9ytb76/c7Mz8eYP2/lmzt1MrZPbAe852ZHw9Qt3FEXN7YZ7tVv+u9P0NExNZMJEBm/nhhXcnOO7ce83dnYgH+OgpAC9AoAC1AowC0AI0C0AI0CkAL0CgALUCjALQAjQLQAjQKQAvQKAAtQKMAtACNAtACNApAC9AoAC1A8wVF0yPpFTYpPwAAAABJRU5ErkJggg==">*/
/*             </a>*/
/*             <div class="media-body">*/
/*                 <h4 class="media-heading">Media heading</h4>*/
/*                 <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>*/
/*                 <!-- Nested media object -->*/
/*                 <div class="media">*/
/*                     <a href="#" class="pull-left">*/
/*                         <img data-src="holder.js/64x64" class="media-object" alt="64x64" style="width: 64px; height: 64px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAABUUlEQVR4nO2UMW7DMAxFc/+jcObqUbsOwDPwCurEQFXsoojgPBT9wxsSO8TTk6JHZo7/zIMWoFEAWoBGAWgBGgWgBWgUgBagUQBagEYBaAEaBaAFaBSAFqBRAFqARgFoARoFoAVoFIAWoNkO0FobZjbMbBzHcfqOmQ13R2feEqBEM3P03oeZjd776Tu/lb1j5m0B3P1yhzJzRMRzJ2dZd39ZZGttayYSoI5oCdUi1kDu/k22FlG/nZ+9OxMLcHVc63NEnMrOi5yP+M5M7ASsu1rP5mO9ytb76/c7Mz8eYP2/lmzt1MrZPbAe852ZHw9Qt3FEXN7YZ7tVv+u9P0NExNZMJEBm/nhhXcnOO7ce83dnYgH+OgpAC9AoAC1AowC0AI0C0AI0CkAL0CgALUCjALQAjQLQAjQKQAvQKAAtQKMAtACNAtACNApAC9AoAC1A8wVF0yPpFTYpPwAAAABJRU5ErkJggg==">*/
/*                     </a>*/
/*                     <div class="media-body">*/
/*                         <h4 class="media-heading">Nested media heading</h4>*/
/*                         Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.*/
/*                         <!-- Nested media object -->*/
/*                         <div class="media">*/
/*                             <a href="#" class="pull-left">*/
/*                                 <img data-src="holder.js/64x64" class="media-object" alt="64x64" style="width: 64px; height: 64px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAABUUlEQVR4nO2UMW7DMAxFc/+jcObqUbsOwDPwCurEQFXsoojgPBT9wxsSO8TTk6JHZo7/zIMWoFEAWoBGAWgBGgWgBWgUgBagUQBagEYBaAEaBaAFaBSAFqBRAFqARgFoARoFoAVoFIAWoNkO0FobZjbMbBzHcfqOmQ13R2feEqBEM3P03oeZjd776Tu/lb1j5m0B3P1yhzJzRMRzJ2dZd39ZZGttayYSoI5oCdUi1kDu/k22FlG/nZ+9OxMLcHVc63NEnMrOi5yP+M5M7ASsu1rP5mO9ytb76/c7Mz8eYP2/lmzt1MrZPbAe852ZHw9Qt3FEXN7YZ7tVv+u9P0NExNZMJEBm/nhhXcnOO7ce83dnYgH+OgpAC9AoAC1AowC0AI0C0AI0CkAL0CgALUCjALQAjQLQAjQKQAvQKAAtQKMAtACNAtACNApAC9AoAC1A8wVF0yPpFTYpPwAAAABJRU5ErkJggg==">*/
/*                             </a>*/
/*                             <div class="media-body">*/
/*                                 <h4 class="media-heading">Nested media heading</h4>*/
/*                                 Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- Nested media object -->*/
/*                 <div class="media">*/
/*                     <a href="#" class="pull-left">*/
/*                         <img data-src="holder.js/64x64" class="media-object" alt="64x64" style="width: 64px; height: 64px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAABUUlEQVR4nO2UMW7DMAxFc/+jcObqUbsOwDPwCurEQFXsoojgPBT9wxsSO8TTk6JHZo7/zIMWoFEAWoBGAWgBGgWgBWgUgBagUQBagEYBaAEaBaAFaBSAFqBRAFqARgFoARoFoAVoFIAWoNkO0FobZjbMbBzHcfqOmQ13R2feEqBEM3P03oeZjd776Tu/lb1j5m0B3P1yhzJzRMRzJ2dZd39ZZGttayYSoI5oCdUi1kDu/k22FlG/nZ+9OxMLcHVc63NEnMrOi5yP+M5M7ASsu1rP5mO9ytb76/c7Mz8eYP2/lmzt1MrZPbAe852ZHw9Qt3FEXN7YZ7tVv+u9P0NExNZMJEBm/nhhXcnOO7ce83dnYgH+OgpAC9AoAC1AowC0AI0C0AI0CkAL0CgALUCjALQAjQLQAjQKQAvQKAAtQKMAtACNAtACNApAC9AoAC1A8wVF0yPpFTYpPwAAAABJRU5ErkJggg==">*/
/*                     </a>*/
/*                     <div class="media-body">*/
/*                         <h4 class="media-heading">Nested media heading</h4>*/
/*                         Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </li>*/
/*         <li class="media">*/
/*             <a href="#" class="pull-right">*/
/*                 <img data-src="holder.js/64x64" class="media-object" alt="64x64" style="width: 64px; height: 64px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAABUUlEQVR4nO2UMW7DMAxFc/+jcObqUbsOwDPwCurEQFXsoojgPBT9wxsSO8TTk6JHZo7/zIMWoFEAWoBGAWgBGgWgBWgUgBagUQBagEYBaAEaBaAFaBSAFqBRAFqARgFoARoFoAVoFIAWoNkO0FobZjbMbBzHcfqOmQ13R2feEqBEM3P03oeZjd776Tu/lb1j5m0B3P1yhzJzRMRzJ2dZd39ZZGttayYSoI5oCdUi1kDu/k22FlG/nZ+9OxMLcHVc63NEnMrOi5yP+M5M7ASsu1rP5mO9ytb76/c7Mz8eYP2/lmzt1MrZPbAe852ZHw9Qt3FEXN7YZ7tVv+u9P0NExNZMJEBm/nhhXcnOO7ce83dnYgH+OgpAC9AoAC1AowC0AI0C0AI0CkAL0CgALUCjALQAjQLQAjQKQAvQKAAtQKMAtACNAtACNApAC9AoAC1A8wVF0yPpFTYpPwAAAABJRU5ErkJggg==">*/
/*             </a>*/
/*             <div class="media-body">*/
/*                 <h4 class="media-heading">Media heading</h4>*/
/*                 Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.*/
/*             </div>*/
/*         </li>*/
/*     </ul>*/
/*     <hr />*/
/*     <h3 class="title">Paddigns</h3>*/
/*     <div class="bs-docs-example">*/
/*         <div class="well well-small">*/
/*             Look, I'm in a .well-small!*/
/*         </div>*/
/*     </div>*/
/*     <div class="well">*/
/*         Look, I'm in a .well!*/
/*     </div>*/
/*     <div class="well well-large">*/
/*         Look, I'm in a .well-large!*/
/*     </div>*/
/*     <div class="form-row">*/
/*         Look, I'm in a .form-row!*/
/*     </div>*/
/*     <div class="hero-unit">*/
/*         <h1>Hello, world!</h1>*/
/*         <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>*/
/*         <p><a class="btn btn-primary btn-large">Learn more</a></p>*/
/*     </div>*/
/*     <hr />*/
/*     <div class="form-row">*/
/*         <table class="table table-bordered table-striped">*/
/*             <thead>*/
/*             <tr>*/
/*                 <th>Variable</th>*/
/*                 <th>By default</th>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             <tr>*/
/*                 <td><code>@gridColumns</code></td>*/
/*                 <td>12</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td><code>@gridColumnWidth</code></td>*/
/*                 <td>60px</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td><code>@gridGutterWidth</code></td>*/
/*                 <td>20px</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td><code>@bodyBackground</code></td>*/
/*                 <td><span class="pull-left">@white;</span><span class="example" style="background: #fff;"></span></td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td><code>@textColor</code></td>*/
/*                 <td><span class="pull-left">@grayDark;</span><span class="example" style="background: #333;"></span></td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td><code>@linkColor</code></td>*/
/*                 <td><span class="pull-left">#08c;</span><span class="example" style="background: #08c"></span></td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td><code>@linkColorHover</code></td>*/
/*                 <td><span class="pull-left">darken(@linkColor, 15%);</span><span class="example" style="background: #005580"></span></td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td><code>@baseFontSize</code></td>*/
/*                 <td>14px;</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td><code>@baseFontFamily</code></td>*/
/*                 <td>@sansFontFamily</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td><code>@baseLineHeight</code></td>*/
/*                 <td>20px;</td>*/
/*             </tr>*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/*     </div>*/
/*     </div>*/
/*     </div>*/
/* {% endblock content %}*/
