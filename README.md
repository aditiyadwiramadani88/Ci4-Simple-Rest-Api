<p> composer update </p>
<p> rename env to .env </p>
<p> Create Database  ci4_api1</p>
<p> php spark migrate </p>
<p> php spark serve </p>






<table>
    <tr>
        <th>url</th>
        <th>method</th>
        <th>Action</th>
    </tr>
    <tr>
        <th>/</th>
        <th>post</th>
        <th>create data = {title: yourtitle, content: yourcontent}</th>
    </tr>
    <tr>
        <th>/id</th>
        <th>get</th>
        <th>details data</th>
    </tr>
    <tr>
        <th>/id</th>
        <th>delete</th>
        <th>delete data</th>
    </tr>
    <tr>
        <th>/</th>
        <th>put</th>
    <th>Edit data = {title: yourtitle, content: yourcontent}</th>
    </tr>
</table>
