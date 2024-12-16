import { useState, useCallback,useEffect } from "react";
import {
  Card,
  Button,
  Page,
  DataTable,
  Icon
} from "@shopify/polaris";
import { Toast, TitleBar, useNavigate } from "@shopify/app-bridge-react";
import { useAuthenticatedFetch } from "../hooks";
import { DeleteMajor } from '@shopify/polaris-icons';


export function DashboardCard() {


  const navigate = useNavigate();
  
  const [active1, setActive1] = useState(false);
  const fetch = useAuthenticatedFetch();
 
  const handleDelete = (id,e) => {
    const currentButton = e.target;
    currentButton.innerText = 'Proccessing';

    fetch('/api/delete', {
        method: 'POST',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            id: id,
        }),
    }).then((res) => {
        if (res.ok) {
            setActive1(!active1);
        }
        else{
            alert('Could not delete');
        }
    }).finally(() => {
      
    });
};
const handleClick = (e) => {
    const currentButton = e.target;
    currentButton.innerText = 'Proccessing';
  }

  const [rows, setRows] = useState([]);  
  let arrayDummy = []
  let count = 1;
    useEffect(() => {

        fetch('/api/scheduleData').then(response => response.json()).then(data => {
            data.forEach((val) => {
                arrayDummy.push([
                    count,
                    val.email,
                    val.time,
                     <div style={{display:'flex',flexDirection:'row',justifyContent:'start'}}>
                     <div style={{marginRight:4}}>


                       <Button
                            size='slim'
                            onClick={(e) => {
                                console.log(val.status);

                                handleClick(e)

                            fetch('/api/status', {
                                method: 'POST',
                                headers: {
                                    'Accept': 'application/json',
                                    'Content-Type': 'application/json'
                                },
                                body: JSON.stringify({
                                status:val.status === 1?0:1,
                                id: val.id,
                                }),

                            }).then((res)=>{
                                if(res.ok){
                                    setActive1(!active1)
                                }

                            }).then(()=>{

                            })

                            }}

                            primary={val.status === 1?true:false}

                        >{ val.status === 0?"Activate":"Deactivate"}</Button>

                      </div>



                        <Button
                        
                        size='slim'
                  
                        onClick={(e) => handleDelete(val.id,e)}
                         icon={<Icon
                            source={DeleteMajor}
                            color="base"
                          />} destructive> Delete</Button>
                        </div>


                          ])
             count++;
            })
            setRows(arrayDummy)

        }).catch((e) => {
        })


    }, [active1])
    // console.log("rows", rows);

  return (
    <>
      <Page>
            <TitleBar title="Dashboard"

                primaryAction={
                    {
                        content: "Schedule Export",
                        onAction: () => navigate("/new")

                    }
                }/>
            <Card>

                <DataTable columnContentTypes={
                        [
                            'numeric',
                            'text',
                            'text',
                            'boolean',
                        ]
                    }
                    headings={
                        [
                            'S.no',
                            'Email',
                            'Scheduled Time',
                            'Action'
                      ]
                    }
                    rows={rows}
                    />

            </Card>
        </Page>
    </>
  );
}
