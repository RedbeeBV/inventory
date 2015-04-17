{% for fieldset_name, fieldset in form %}
<fieldset>
    <legend>{{ fieldset_name }}</legend>
    {% for field in fieldset %}
    
    {% if fieldset['type'] is sameas('text') %}
    {% include 'inc/text.php'%}
    {% endif %}
    
    {% if fieldset['type'] is sameas('checkbox') %}
    {% include 'inc/checkbox.php'%}
    {% endif %}
    
    {% if fieldset['type'] is sameas('select') %}
    {% include 'inc/select.php'%}
    {% endif %}
    
    {% endfor %}    
</fieldset>
{% endfor %}