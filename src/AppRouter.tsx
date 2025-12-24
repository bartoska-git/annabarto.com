import React from 'react';
import { BrowserRouter, Routes, Route } from 'react-router-dom';
import { App } from './App';
import { MoniifyCaseStudy } from './pages/MoniifyCaseStudy';
import { AirtableAppCaseStudy } from './pages/AirtableAppCaseStudy';
import { MoniifyCreatorsCaseStudy } from './pages/MoniifyCreatorsCaseStudy';
import { MoniifyDailyCaseStudy } from './pages/MoniifyDailyCaseStudy';
import { RicHerCaseStudy } from './pages/RicHerCaseStudy';
export function AppRouter() {
  return <BrowserRouter>
      <Routes>
        <Route path="/" element={<App />} />
        <Route path="/case-study/moniify" element={<MoniifyCaseStudy />} />
        <Route path="/case-study/airtable-app" element={<AirtableAppCaseStudy />} />
        <Route path="/case-study/moniify-creators" element={<MoniifyCreatorsCaseStudy />} />
        <Route path="/case-study/moniify-daily" element={<MoniifyDailyCaseStudy />} />
        <Route path="/case-study/richer" element={<RicHerCaseStudy />} />
      </Routes>
    </BrowserRouter>;
}