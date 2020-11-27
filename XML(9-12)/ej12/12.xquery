for $s in doc("12.xml")/sales/customers
where $s/customernumber/@card = "silver"
return <resultado>
        <state>{$s/address/state/text()}</state>
        <country>{$s/address/country/text()}</country>
        </resultado>


for $r in doc("12.xml")/sales/customers
let $a := sum($r/orders/order) 
where $r/orders/order/@status = "closed"
return <resultado>
         <customername>{data($r/customername)}</customername>
       <money>{$a}</money>
        </resultado>