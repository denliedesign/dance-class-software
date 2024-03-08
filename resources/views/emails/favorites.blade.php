<div style="margin: 20px auto; max-width: 800px; text-align: center; font-family: 'Montserrat', sans-serif;">
    <h1 style="text-align: center;">Breaking Ground Dance Center</h1>
    <div>
        breakinggrounddance@hotmail.com
        &nbsp; / &nbsp;
        914-747-3150
        &nbsp; / &nbsp;
        101 Castleton Street, Pleasantville, NY 10570
    </div>
    <h2 style="margin-bottom: 20px; text-transform: uppercase;">Your Selected Classes</h2>

    <table style="width: 100%; border-collapse: collapse; border: 1px solid #ddd;">
        <thead style="background-color: #f2f2f2;">
        <tr>
            <th style="padding: 10px; border: 1px solid #ddd;">Name</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Age</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Dance Style</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Day</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Time</th>
        </tr>
        </thead>
        <tbody>
        @foreach($selectedClasses as $class)
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><strong>{!! $class->name !!}</strong></td>
                <td style="padding: 10px; border: 1px solid #ddd;">{!! $class->age_requirement !!}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">{!! $class->dance_style !!}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">{!! $class->day_of_week !!}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">{!! $class->time !!}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
