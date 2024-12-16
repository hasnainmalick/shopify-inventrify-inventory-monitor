import {
  Card,
  Page,
  Layout,
} from "@shopify/polaris";
import { TitleBar } from "@shopify/app-bridge-react";

import { DashboardCard, ExportCard } from "../components";

export default function HomePage() {
  return (
    // <Page narrowWidth>
    //   {/* <TitleBar title="Shipping zone app" primaryAction={null} /> */}
    //   <Layout>
    //     <Layout.Section>
    //       <DashboardCard />
    //     </Layout.Section>
    //   </Layout>
    // </Page>
    <Page fullWidth>
      <DashboardCard />
    </Page>
  );
}
