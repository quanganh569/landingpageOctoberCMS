<?php

/* C:\wamp64\www\octobermovies/themes/clonencsc/partials/tuyendung.htm */
class __TwigTemplate_58bf82959716570241656fadc13661c02fe1746f1161854cee371574c9d13ed8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<section id=\"blog\" class=\"section\">
        <div class=\"container \">
            <div class=\"row text-center\">
                <div class=\"col\">
                    <div class=\"overflow-hidden mb-5 \">
                    
                    
                         ";
        // line 8
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "banner-tuyendung.htm"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 9
        echo "                    </div>
                </div>
            </div>
          
                  
        ";
        // line 14
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("advanced"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 15
        echo "    </section>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\octobermovies/themes/clonencsc/partials/tuyendung.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  44 => 14,  37 => 9,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"blog\" class=\"section\">
        <div class=\"container \">
            <div class=\"row text-center\">
                <div class=\"col\">
                    <div class=\"overflow-hidden mb-5 \">
                    
                    
                         {% component 'contenteditor' file=\"banner-tuyendung.htm\" %}
                    </div>
                </div>
            </div>
          
                  
        {% component 'advanced' %}
    </section>", "C:\\wamp64\\www\\octobermovies/themes/clonencsc/partials/tuyendung.htm", "");
    }
}
