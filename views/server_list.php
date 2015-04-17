{% include 'inc/header.php' %}

<div class="row">
    <div class="col-md-12">
        <h1 class="text-center ">
            Servers
            <a id="add" href="/server/new">
                <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
            </a>
        </h1>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <table class="table table-hover table-striped" id="data-table">
            <thead>
                <tr>
                    <th>Customer</th>
                    <th>Contact</th>
                    <th>Hostname</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                {% for server in servers %}
                <tr>
                    <td>{{ server.Customer_details.Customer }}</td>
                    <td>{{ server.Customer_details.Contact }}</td>
                    <td>{{ server.Customer_details.Hostname }}</td>
                    <td>
                        <div class="col-md-4">
                            <a href="/server/show/{{ server.Customer_details.Customer }}-{{ server.Customer_details.Hostname }}" class="btn btn-xs btn-block btn-success">
                                Show
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="/server/edit/{{ server.Customer_details.Customer }}-{{ server.Customer_details.Hostname }}" class="btn btn-xs btn-block btn-primary">
                                Edit
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="/server/delete/{{ server.Customer_details.Customer }}-{{ server.Customer_details.Hostname }}" class="btn btn-xs btn-block btn-danger">
                                Delete
                            </a>
                        </div>
                    </td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
</div>

{% include 'inc/footer.php' %}