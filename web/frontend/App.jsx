import { BrowserRouter } from "react-router-dom";
import { NavigationMenu } from "@shopify/app-bridge-react";
import Routes from "./Routes";
import { useState,useEffect } from "react";


import {
  AppBridgeProvider,
  QueryProvider,
  PolarisProvider,
} from "./components";

export default function App() {
  // Any .tsx or .jsx files in /pages will become a route
  // See documentation for <Routes /> for more info
  const pages = import.meta.globEager("./pages/**/!(*.test.[jt]sx)*.([jt]sx)");
  // Add a state variable to hold the confirmationUrl
  const [confirmationUrl, setConfirmationUrl] = useState(null);
  const [isLoading, setIsLoading] = useState(true);

  // Fetch the confirmationUrl from the backend when the component mounts
  // useEffect(() => {
  //   const fetchConfirmationUrl = async () => {
    
  //       const urlParams = new URLSearchParams(window.location.search);
  //       const shopDomain = urlParams.get('shop');

  //       if (!shopDomain) {
  //         console.error('Shop domain not found in the URL.');
  //         return;
  //       }

  //       const response = await fetch(`/api/check-billing?shop=${shopDomain}`, {
  //         method: 'GET',
  //         headers: {
  //           'Content-Type': 'application/json',
  //         },
  //       });
  //       try {
  //       const data = await response.json();
  //       if (data.confirmationUrl) {
  //         setConfirmationUrl(data.confirmationUrl);
  //       }
       
  //     } catch (error) {
  //       setIsLoading(false);
  //     }
  //   };
  //   fetchConfirmationUrl();
  // }, []);


  // useEffect(() => {
  //   if (confirmationUrl) {
  //     console.log(confirmationUrl);
  //     window.top.location.href = confirmationUrl;
  //   }
  // }, [confirmationUrl]);
  
  // if (isLoading) {
  //   return <div>Loading...</div>;
  // }

  return (
    <PolarisProvider>
      <BrowserRouter>
        <AppBridgeProvider> 
          <QueryProvider>
            {/* <NavigationMenu
              navigationLinks={[
                {
                  label: "Page name",
                  destination: "/pagename",
                },
              ]}
            /> */}
            <Routes pages={pages} />
          </QueryProvider>
        </AppBridgeProvider>
      </BrowserRouter>
    </PolarisProvider>
  );
}

