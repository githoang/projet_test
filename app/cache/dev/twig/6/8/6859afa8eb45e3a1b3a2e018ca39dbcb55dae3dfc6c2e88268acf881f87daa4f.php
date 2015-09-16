<?php

/* JDareClankBundle:Default:index.html.twig */
class __TwigTemplate_cffd161649b978bec786bb23461137394388d55996c496dc7fddc040c5e1e874 extends Twig_Template
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
        // line 1
        echo "<html>
<head>
    <title>ClankBundle</title>
</head>
<body>
Hello!

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js\"></script>
<script type=\"text/javascript\">
    (function(\$){
        \$(function(){
            var clank = Clank.connect(\"ws://clank.local:8080\");

            clank.on(\"socket/connect\", function(session){

                /**
                 * Pub Sub Example
                 *
                 */

                session.subscribe(\"sample/channel/1234\", function(uri, payload){
                    console.log(\"Received message\", uri, payload);
                });

                session.publish(\"sample/channel/1234\", \"Sup String\");




                /**
                 * RPC Example
                 */

                session.call(\"sample/add_func\", [2, 5])

                        .then(

                        function(result)
                        {
                            console.log(\"RPC Result\", result);
                        },

                        function(error, desc)
                        {
                            console.log(\"RPC Error\", error, desc);
                        }

                );
            });

            clank.on(\"socket/disconnect\", function(data){
                //console.log(\"Disconnected\", data);
            });

        })
    })(jQuery);

</script>
";
        // line 59
        echo $this->env->getExtension('clank')->clientOutput();
        echo "
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "JDareClankBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 59,  19 => 1,);
    }
}
/* <html>*/
/* <head>*/
/*     <title>ClankBundle</title>*/
/* </head>*/
/* <body>*/
/* Hello!*/
/* */
/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>*/
/* <script type="text/javascript">*/
/*     (function($){*/
/*         $(function(){*/
/*             var clank = Clank.connect("ws://clank.local:8080");*/
/* */
/*             clank.on("socket/connect", function(session){*/
/* */
/*                 /***/
/*                  * Pub Sub Example*/
/*                  **/
/*                  *//**/
/* */
/*                 session.subscribe("sample/channel/1234", function(uri, payload){*/
/*                     console.log("Received message", uri, payload);*/
/*                 });*/
/* */
/*                 session.publish("sample/channel/1234", "Sup String");*/
/* */
/* */
/* */
/* */
/*                 /***/
/*                  * RPC Example*/
/*                  *//**/
/* */
/*                 session.call("sample/add_func", [2, 5])*/
/* */
/*                         .then(*/
/* */
/*                         function(result)*/
/*                         {*/
/*                             console.log("RPC Result", result);*/
/*                         },*/
/* */
/*                         function(error, desc)*/
/*                         {*/
/*                             console.log("RPC Error", error, desc);*/
/*                         }*/
/* */
/*                 );*/
/*             });*/
/* */
/*             clank.on("socket/disconnect", function(data){*/
/*                 //console.log("Disconnected", data);*/
/*             });*/
/* */
/*         })*/
/*     })(jQuery);*/
/* */
/* </script>*/
/* {{ clank_client() }}*/
/* </body>*/
/* </html>*/
/* */
