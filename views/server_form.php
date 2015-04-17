{% include 'inc/header.php' %}

<div class="row">
    <div class="col-md-12">
        <h1 class="text-center">
            New server
        </h1>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <form class="form-horizontal" method="POST" action="/server/save">

            {% for fieldset in form %}
            <fieldset>
                <legend>{{ fieldset.fieldset|replace('_',' ') }}</legend>
                {% for field in fieldset.elements %}

                {% if field['type'] == 'text' %}
                <div class="form-group">
                    <label for="{{field.name}}" class="col-sm-2 control-label">{{field.name|replace('_',' ')}}</label>
                    <div class="col-sm-10">
                        <input type="text" name="{{fieldset.fieldset}}[{{field.name}}]"  class="form-control" id="{{field.name}}" value="{{ server[fieldset.fieldset][field.name] }}">
                    </div>
                </div>
                {% endif %}

                {% if field.type == 'checkbox' %}
                <div class="form-group">
                    <div class="checkbox">
                        <div class="col-sm-10 col-sm-offset-2">
                            <input type="checkbox" name="{{fieldset.fieldset}}[{{field.name}}]" value="{{field.name}}" {% if server[fieldset.fieldset][field.name] %}checked{% endif %}> 
                                   {{field.name|replace('_',' ')}}
                        </div>
                    </div>
                </div>
                {% endif %}

                {% if field.type == 'select' %}
                <div class="form-group">
                    <label class="col-sm-2 control-label">{{field.name|replace('_',' ')}}</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="{{fieldset.fieldset}}[{{field.name}}]">
                            {% for option in field.options %}
                            <option value="{{ option }}" {% if server[fieldset.fieldset][field.name] == option %}selected{% endif %}>{{ option }}</option>
                            {% endfor %}
                        </select>
                    </div>
                </div>
                {% endif %}

                {% endfor %}    
            </fieldset>
            {% endfor %}
            <button type="submit" class="btn btn-default pull-right">Save</button>
        </form>
    </div>
</div>

{% include 'inc/footer.php' %}