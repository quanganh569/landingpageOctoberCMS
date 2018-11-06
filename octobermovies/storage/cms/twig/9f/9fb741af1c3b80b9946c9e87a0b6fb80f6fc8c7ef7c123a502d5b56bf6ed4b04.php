<?php

/* C:\wamp64\www\octobermovies/themes/clonencsc/partials/footer.htm */
class __TwigTemplate_634acc9d39f52c152b7a53d62b9a901d1f3ea262fa01b1c8e7fae19c1defba13 extends Twig_Template
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
        echo "<div class=\"section bg-light-5\">
<div class=\"section bg-light-5\">
        <div class=\"container\">
            <div class=\"row align-items-center justify-content-center appear-animation\" data-appear-animation=\"fadeInRightShorter\">
              <div class=\"col-4 col-md-1-5 text-center text-md-left\">
                  <img src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logos/logo_netnam.png");
        echo "\" width=\"170\" alt=\"\" class=\"img-fluid\">
              </div>
              <div class=\"col-4 col-md-1-5 text-center\">
                  <img src=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logos/logo_VNCS.png");
        echo "\" width=\"80\" alt=\"\" class=\"img-fluid\">
              </div>
              <div class=\"col-4 col-md-1-5 text-center\">
                  <img src=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logos/logo_VTVcab.png");
        echo "\" width=\"100\" alt=\"\" class=\"img-fluid\">
              </div>
              <div class=\"col-4 col-md-1-5 text-center text-md-right mt-5 mt-md-0\">
                  <img src=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logos/logo_FPT.png");
        echo "\" width=\"140\" alt=\"\" class=\"img-fluid\">
              </div>
              <div class=\"col-4 col-md-1-5 text-center text-md-right mt-5 mt-md-0\">
                  <img src=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logos/logo_SPT.png");
        echo "\" width=\"100\" alt=\"\" class=\"img-fluid\">
              </div>
                          </div> 
                          
                    
        </div>
    </div>

    <div class=\"section section-background section-height-4\">
        <img src=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/backgrounds/background-3.jpg");
        echo "\"  alt=\"\" class=\"img-responsive\">
    </div>
</div>
<footer id=\"footer\" class=\"footer-hover-links-light pt-4 mt-0\">
    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-lg-4 mb-4 mb-lg-0\">
                
                ";
        // line 36
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "footer-lienhe.htm"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 37
        echo "                
            </div>
            <div class=\"col-lg-3 mb-4 mb-lg-0\">
                
                  ";
        // line 41
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "footer-lienket.htm"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 42
        echo "            </div>
            <div class=\"col-lg-5\">
                <h2 class=\"font-weight-semibold text-1 mb-3\">GỬI TIN NHẮN</h2>

<!-- <form class=\"contact-form contact-form-dark form-errors-light \" action=\"\" method=\"POST\"  >       
  <div class=\"contact-form-success alert alert-success d-none\">
      Tin nhắn của bạn đã được gửi thành công.
      <span class=\"mail-error-message d-block\"></span>
  </div>
      <div class=\"form-row\">
             <div class=\"form-group col-md-6\">
                 <input type=\"text\" value=\"\" data-msg-required=\"Chưa nhập họ tên\" maxlength=\"100\" class=\"form-control\" name=\"name\"
                  id=\"name\" placeholder=\"Họ tên\"  required>
             </div>
             <div class=\"form-group col-md-6\">
                 <input type=\"email\" value=\"\" data-msg-required=\"Chưa nhập địa chỉ E-mail\" data-msg-email=\"Sai cấu trúc địa chỉ E-mail (mail@example.com)\"
                  maxlength=\"100\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"E-mail\"  required>
             </div>
         </div>
         <div class=\"form-row\">
             <div class=\"form-group col\">
                 <input type=\"text\" value=\"\" data-msg-required=\"Chưa nhập tiêu đề\" maxlength=\"100\" class=\"form-control\" name=\"subject\"
                  id=\"subject\" placeholder=\"Tiêu đề\"  required>
             </div>
         </div>
         <div class=\"form-row\">
             <div class=\"form-group col\">
                 <textarea maxlength=\"5000\" data-msg-required=\"Chưa nhập nội dung tin nhắn\" rows=\"5\" class=\"form-control\" name=\"message\"
                  id=\"message\" placeholder=\"Nội dung\"  required></textarea>
             </div>
         </div>
         <div class=\"form-row mt-2\">
             <div class=\"col\">
                 <input type=\"submit\" value=\"GỬI\" class=\"btn btn-primary btn-rounded btn-4 font-weight-semibold text-0\"
                  data-loading-text=\"Loading...\">
             </div>
         </div>
     </form> -->
       
       ";
        // line 81
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("simpleContact"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 82
        echo "       
       
                 

               
            </div>
        </div>
    </div>
    <div class=\"footer-copyright\">
        <div class=\"container\">
            <div class=\"row text-center\">
                <div class=\"col\">
                    <a href=\"index.html\"><img src=\"";
        // line 94
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo.png");
        echo "\" width=\"78\" height=\"70\" alt=\"CSCS image logo\" class=\"img-fluid\" /></a>
                    <p class=\"pt-3 pb-5\">Bản quyền thuộc Trung tâm giám sát an toàn không gian mạng quốc gia. </p>
                </div>
            </div>
        </div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\octobermovies/themes/clonencsc/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 94,  139 => 82,  135 => 81,  94 => 42,  89 => 41,  83 => 37,  78 => 36,  66 => 27,  54 => 18,  48 => 15,  42 => 12,  36 => 9,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"section bg-light-5\">
<div class=\"section bg-light-5\">
        <div class=\"container\">
            <div class=\"row align-items-center justify-content-center appear-animation\" data-appear-animation=\"fadeInRightShorter\">
              <div class=\"col-4 col-md-1-5 text-center text-md-left\">
                  <img src=\"{{ 'assets/img/logos/logo_netnam.png'|theme }}\" width=\"170\" alt=\"\" class=\"img-fluid\">
              </div>
              <div class=\"col-4 col-md-1-5 text-center\">
                  <img src=\"{{ 'assets/img/logos/logo_VNCS.png'|theme }}\" width=\"80\" alt=\"\" class=\"img-fluid\">
              </div>
              <div class=\"col-4 col-md-1-5 text-center\">
                  <img src=\"{{ 'assets/img/logos/logo_VTVcab.png'|theme }}\" width=\"100\" alt=\"\" class=\"img-fluid\">
              </div>
              <div class=\"col-4 col-md-1-5 text-center text-md-right mt-5 mt-md-0\">
                  <img src=\"{{ 'assets/img/logos/logo_FPT.png'|theme }}\" width=\"140\" alt=\"\" class=\"img-fluid\">
              </div>
              <div class=\"col-4 col-md-1-5 text-center text-md-right mt-5 mt-md-0\">
                  <img src=\"{{ 'assets/img/logos/logo_SPT.png'|theme }}\" width=\"100\" alt=\"\" class=\"img-fluid\">
              </div>
                          </div> 
                          
                    
        </div>
    </div>

    <div class=\"section section-background section-height-4\">
        <img src=\"{{ 'assets/img/backgrounds/background-3.jpg'|theme }}\"  alt=\"\" class=\"img-responsive\">
    </div>
</div>
<footer id=\"footer\" class=\"footer-hover-links-light pt-4 mt-0\">
    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-lg-4 mb-4 mb-lg-0\">
                
                {% component 'contenteditor' file=\"footer-lienhe.htm\" %}
                
            </div>
            <div class=\"col-lg-3 mb-4 mb-lg-0\">
                
                  {% component 'contenteditor' file=\"footer-lienket.htm\" %}
            </div>
            <div class=\"col-lg-5\">
                <h2 class=\"font-weight-semibold text-1 mb-3\">GỬI TIN NHẮN</h2>

<!-- <form class=\"contact-form contact-form-dark form-errors-light \" action=\"\" method=\"POST\"  >       
  <div class=\"contact-form-success alert alert-success d-none\">
      Tin nhắn của bạn đã được gửi thành công.
      <span class=\"mail-error-message d-block\"></span>
  </div>
      <div class=\"form-row\">
             <div class=\"form-group col-md-6\">
                 <input type=\"text\" value=\"\" data-msg-required=\"Chưa nhập họ tên\" maxlength=\"100\" class=\"form-control\" name=\"name\"
                  id=\"name\" placeholder=\"Họ tên\"  required>
             </div>
             <div class=\"form-group col-md-6\">
                 <input type=\"email\" value=\"\" data-msg-required=\"Chưa nhập địa chỉ E-mail\" data-msg-email=\"Sai cấu trúc địa chỉ E-mail (mail@example.com)\"
                  maxlength=\"100\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"E-mail\"  required>
             </div>
         </div>
         <div class=\"form-row\">
             <div class=\"form-group col\">
                 <input type=\"text\" value=\"\" data-msg-required=\"Chưa nhập tiêu đề\" maxlength=\"100\" class=\"form-control\" name=\"subject\"
                  id=\"subject\" placeholder=\"Tiêu đề\"  required>
             </div>
         </div>
         <div class=\"form-row\">
             <div class=\"form-group col\">
                 <textarea maxlength=\"5000\" data-msg-required=\"Chưa nhập nội dung tin nhắn\" rows=\"5\" class=\"form-control\" name=\"message\"
                  id=\"message\" placeholder=\"Nội dung\"  required></textarea>
             </div>
         </div>
         <div class=\"form-row mt-2\">
             <div class=\"col\">
                 <input type=\"submit\" value=\"GỬI\" class=\"btn btn-primary btn-rounded btn-4 font-weight-semibold text-0\"
                  data-loading-text=\"Loading...\">
             </div>
         </div>
     </form> -->
       
       {% component 'simpleContact' %}
       
       
                 

               
            </div>
        </div>
    </div>
    <div class=\"footer-copyright\">
        <div class=\"container\">
            <div class=\"row text-center\">
                <div class=\"col\">
                    <a href=\"index.html\"><img src=\"{{ 'assets/img/logo.png'|theme }}\" width=\"78\" height=\"70\" alt=\"CSCS image logo\" class=\"img-fluid\" /></a>
                    <p class=\"pt-3 pb-5\">Bản quyền thuộc Trung tâm giám sát an toàn không gian mạng quốc gia. </p>
                </div>
            </div>
        </div>
    </div>
</footer>", "C:\\wamp64\\www\\octobermovies/themes/clonencsc/partials/footer.htm", "");
    }
}
