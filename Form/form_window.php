<!--

FILE : Form_window.php

-->





    <form action='../getData.php' method='post'>

        {# Commentaire : #}


    {% set display = 'block' %}


    {% for i in 1..iter %}
        {% if i > 1 %}
            {% set display = 'none' %}

        {% endif %}
        <div class='col-md-12 blueBorder categorie_conteneur'  style='display:{{display}}'>

            <div class="row">

                <!--Bloc Selections-->
                <aside class="col-md-2 col-md-offset-0 form_selections">
                    Sélections {{i}}_1<br/>
                    Sélections {{i}}_2<br/>
                    Sélections {{i}}_3<br/><br/><br/><br/>
                </aside>


                <!--Formulaires-->
                <div class="col-md-7 col-md-offset-0 form_forms">
                    <div class="row">
                        <div class="col-md-12 redBorder">  

                            {% if i == 0 %}
                                {% include 'form_1.html' %}
                            {% elseif i == 1 %}
                                {% include 'form_1.html' %}
                            {% else %}
                                {% include 'form_1.html' %}
                            {% endif %}


                        </div>
                    </div>
                </div>


                <!--Informations/Influences-->
                <aside class="col-md-3 col-md-offset-0">
                    <div class="row">
                        <aside class="col-md-12 col-md-offset-0 form_infos">Informations {{i}}<br/><br/><br/></aside>
                        <aside class="col-md-12 col-md-offset-0 form_infos">Conséquences {{i}}<br/><br/><br/></aside>
                    </div>
                </aside>

            </div>

        </div>

    {% endfor %}
    </form>
