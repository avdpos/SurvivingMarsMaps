<form method="post" action="include/moduls/getmapdata.php">
    <table  class="selector">
        <tr>
            <th>
                <label for="terrain">Terrain</label>
            </th>
            <td>
                <select name="terrain">
                    <option value="0">N/A</option>
                    <option value="Relatively Flat">Relatively Flat</option>
                    <option value="Steep">Steep</option>
                    <option value="Rough">Rough</option>
                    <option value="Mountainious">Mountainious</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>
                <label for="metals">Metals</label>
            </th>
            <td>
                <select name="metals" onchange="count_resources()">
                    <option value="0">N/A</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>
                <label for="concrete">Concrete</label>
            </th>
            <td>
                <select name="concrete" onchange="count_resources()">
                    <option value="0">N/A</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>
                <label for="water">Water</label>
            </th>
            <td>
                <select name="water" onchange="count_resources()">
                    <option value="0">N/A</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>
                <label for="dust_devils">Dust Devils</label>
            </th>
            <td>
                <select name="dust_devils" onchange="count_threat()">
                    <option value="0">N/A</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>
                <label for="dust_storms">Dust Storms</label>
            </th>
            <td>
                <select name="dust_storms" onchange="count_threat()">
                    <option value="0">N/A</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>
                <label for="meteors">Meteors</label>
            </th>
            <td>
                <select name="meteors" onchange="count_threat()">
                    <option value="0">N/A</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>
                <label for="cold_waves">Cold Waves</label>
            </th>
            <td>
                <select name="cold_waves" onchange="count_threat()">
                    <option value="0">N/A</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>
                <label for="resource_min">Minimum total resources</label>
            </th>
            <td>
                <select name="resource_min">
                    <option value="0">N/A</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>
                <label for="resource_max">Maximum total resources</label>
            </th>
            <td>
                <select name="resource_max">
                    <option value="0">N/A</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>
                <label for="threat_min">Minimum total threat</label>
            </th>
            <td>
                <select name="threat_min">
                    <option value="0">N/A</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>
                <label for="threat_max">Maximum total threat</label>
            </th>
            <td>
                <select name="threat_max">
                    <option value="0">N/A</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                </select>
            </td>
        </tr>
    </table>
    <input type="submit" value="Scan Mars for landingspots">
    
</form>
