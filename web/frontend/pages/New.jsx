import { Page } from "@shopify/polaris";
import { TitleBar } from "@shopify/app-bridge-react";
import { ExportCard } from "../components";

export default function ManageCode() {
  const breadcrumbs = [{ content: "Dashboard", url: "/" }];

  return (
    <Page narrowWidth>
      <TitleBar
        title="Schedule Export"
        breadcrumbs={breadcrumbs}
        primaryAction={null}
      />
      <ExportCard />
    </Page>
    
  );
}
