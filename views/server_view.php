{% include 'inc/header.php' %}

<div class="row">
    <div class="col-md-12">
        <h1 class="text-center">
            {{ server[0]['Customer_details']['Customer'] }} - {{ server[0]['Customer_details']['Hostname'] }}
            <a id="add" href="/pdf/{{ server[0]['Customer_details']['Customer'] }}-{{ server[0]['Customer_details']['Hostname'] }}.pdf" target="_blank">
                <span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span>
            </a>
        </h1>
    </div>
</div>

<div class="row">
    <div class="container">
            <div class="row">
                <div class="col-md-12">
                    {% for key, item in server[0] %}
                    <table class="table table-striped table-split">
                        <caption>
                            {{ key|replace('_', ' ') }}
                        </caption>
                        {% for name, value in item %}
                        <tr>
                            <td>
                                {{ name|replace('_', ' ') }}
                            </td>
                            <td>
                                {% if name == value  %}
                                <input type="checkbox" checked>
                                {% else  %}
                                {{ value|replace('_', ' ') }}
                                {% endif %}
                            </td>
                        </tr> 
                        {% endfor %}
                    </table>
                    {% endfor %}
                </div>
            </div>
        </div>
</div>

{% include 'inc/footer.php' %}