import React, { useState, Component } from 'react';
import { TargetIcon, SparklesIcon, LightbulbIcon, UsersIcon, MessageSquareIcon, ZapIcon, ClockIcon, PaletteIcon, SearchIcon, CodeIcon, LayoutIcon, PenToolIcon, LayersIcon, AwardIcon } from 'lucide-react';
export function Capabilities() {
  const [activeTab, setActiveTab] = useState('skills');
  const tabContent = {
    skills: [{
      name: 'Product Strategy & Roadmapping',
      category: 'Soft skills',
      color: 'bg-purple-100 text-purple-800',
      icon: TargetIcon
    }, {
      name: 'User Research & Experience Design',
      category: 'Soft skills',
      color: 'bg-purple-100 text-purple-800',
      icon: SparklesIcon
    }, {
      name: 'Agile & Lean Methodologies',
      category: 'Soft skills',
      color: 'bg-purple-100 text-purple-800',
      icon: ZapIcon
    }, {
      name: 'Data-Driven Decision Making',
      category: 'Hard skills',
      color: 'bg-amber-100 text-amber-800',
      icon: SearchIcon
    }, {
      name: 'Cross-functional Team Leadership',
      category: 'Soft skills',
      color: 'bg-purple-100 text-purple-800',
      icon: UsersIcon
    }, {
      name: 'Content Strategy & Development',
      category: 'Soft skills',
      color: 'bg-purple-100 text-purple-800',
      icon: LightbulbIcon
    }, {
      name: 'Platform Ecosystem Building',
      category: 'Hard skills',
      color: 'bg-amber-100 text-amber-800',
      icon: LayersIcon
    }, {
      name: 'Growth & Monetization Strategy',
      category: 'Hard skills',
      color: 'bg-amber-100 text-amber-800',
      icon: AwardIcon
    }, {
      name: 'Time Management',
      category: 'Soft skills',
      color: 'bg-purple-100 text-purple-800',
      icon: ClockIcon
    }, {
      name: 'Design Systems',
      category: 'Hard skills',
      color: 'bg-amber-100 text-amber-800',
      icon: PaletteIcon
    }, {
      name: 'Wireframing & Prototyping',
      category: 'Hard skills',
      color: 'bg-amber-100 text-amber-800',
      icon: PenToolIcon
    }, {
      name: 'Communication',
      category: 'Soft skills',
      color: 'bg-purple-100 text-purple-800',
      icon: MessageSquareIcon
    }],
    tools: [{
      name: 'Figma',
      proficiency: 'Advanced',
      color: 'bg-amber-100 text-amber-800'
    }, {
      name: 'Adobe Creative Suite',
      proficiency: 'Advanced',
      color: 'bg-amber-100 text-amber-800'
    }, {
      name: 'JIRA',
      proficiency: 'Confident',
      color: 'bg-blue-100 text-blue-800'
    }, {
      name: 'Confluence',
      proficiency: 'Confident',
      color: 'bg-blue-100 text-blue-800'
    }, {
      name: 'Google Analytics',
      proficiency: 'Advanced',
      color: 'bg-amber-100 text-amber-800'
    }, {
      name: 'Data Studio',
      proficiency: 'Confident',
      color: 'bg-blue-100 text-blue-800'
    }, {
      name: 'Amplitude',
      proficiency: 'Confident',
      color: 'bg-blue-100 text-blue-800'
    }, {
      name: 'Mixpanel',
      proficiency: 'Confident',
      color: 'bg-blue-100 text-blue-800'
    }, {
      name: 'Notion',
      proficiency: 'Advanced',
      color: 'bg-amber-100 text-amber-800'
    }, {
      name: 'Airtable',
      proficiency: 'Confident',
      color: 'bg-blue-100 text-blue-800'
    }, {
      name: 'Miro',
      proficiency: 'Advanced',
      color: 'bg-amber-100 text-amber-800'
    }, {
      name: 'FigJam',
      proficiency: 'Confident',
      color: 'bg-blue-100 text-blue-800'
    }, {
      name: 'GitHub',
      proficiency: 'Basic',
      color: 'bg-slate-100 text-slate-800'
    }, {
      name: 'Optimizely',
      proficiency: 'Confident',
      color: 'bg-blue-100 text-blue-800'
    }, {
      name: 'A/B Testing Platforms',
      proficiency: 'Advanced',
      color: 'bg-amber-100 text-amber-800'
    }],
    experience: [{
      year: '2019-2023',
      title: 'Senior Product Manager',
      organization: 'Google'
    }, {
      year: '2017-2019',
      title: 'Product Lead, YouTube Creator Platform',
      organization: 'YouTube'
    }, {
      year: '2015-2017',
      title: 'Product Strategy Consultant',
      organization: 'Media Lab'
    }, {
      year: '2013-2015',
      title: 'Product Manager',
      organization: 'Early-stage Startup'
    }, {
      year: '2011-2013',
      title: 'Content Strategy Lead',
      organization: 'Digital Agency'
    }],
    certifications: [{
      year: '2022',
      title: 'Professional Scrum Product Owner (PSPO)',
      provider: 'Scrum.org'
    }, {
      year: '2021',
      title: 'Google Analytics Certification',
      provider: 'Google'
    }, {
      year: '2020',
      title: 'Product Management Certification',
      provider: 'Product School'
    }, {
      year: '2019',
      title: 'UX Design Professional Certificate',
      provider: 'Google'
    }, {
      year: '2018',
      title: 'Advanced Leadership Program',
      provider: 'Berkeley Haas'
    }],
    education: [{
      year: '2009-2011',
      title: 'MBA',
      university: 'Stanford Graduate School of Business'
    }, {
      year: '2005-2009',
      title: 'B.A. in Communication & Media Studies',
      university: 'Columbia University'
    }, {
      year: '2017',
      title: 'Executive Education in Design Thinking',
      university: 'IDEO'
    }],
    languages: [{
      name: 'English',
      flag: '🇬🇧',
      level: 'C2',
      color: 'bg-emerald-100 text-emerald-800'
    }, {
      name: 'Czech',
      flag: '🇨🇿',
      level: 'C2',
      color: 'bg-emerald-100 text-emerald-800'
    }, {
      name: 'Spanish',
      flag: '🇪🇸',
      level: 'B2',
      color: 'bg-blue-100 text-blue-800'
    }, {
      name: 'German',
      flag: '🇩🇪',
      level: 'B1',
      color: 'bg-amber-100 text-amber-800'
    }]
  };
  const renderContent = () => {
    if (activeTab === 'skills') {
      return <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
          {(tabContent.skills as Array<{
          name: string;
          category: string;
          color: string;
          icon: ComponentType<{
            className?: string;
          }>;
        }>).map((skill, index) => {
          const Icon = skill.icon;
          return <div key={index} className="flex flex-col p-4 bg-warm-beige/50 rounded-lg border border-olive-grey/10 hover:border-olive-grey/20 transition-colors">
                <div className="flex items-center gap-3 mb-3">
                  <Icon className="w-5 h-5 text-deep-espresso/70" />
                  <h3 className="font-semibold text-deep-espresso text-sm">
                    {skill.name}
                  </h3>
                </div>
                <span className={`inline-block px-3 py-1 rounded-full text-xs font-medium ${skill.color} self-start`}>
                  {skill.category}
                </span>
              </div>;
        })}
        </div>;
    }
    if (activeTab === 'tools') {
      return <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
          {(tabContent.tools as Array<{
          name: string;
          proficiency: string;
          color: string;
        }>).map((tool, index) => <div key={index} className="flex items-start justify-between p-4 bg-warm-beige/50 rounded-lg border border-olive-grey/10 hover:border-olive-grey/20 transition-colors">
              <div className="flex-1">
                <h3 className="font-semibold text-deep-espresso mb-2">
                  {tool.name}
                </h3>
                <span className={`inline-block px-3 py-1 rounded-full text-xs font-medium ${tool.color}`}>
                  {tool.proficiency}
                </span>
              </div>
            </div>)}
        </div>;
    }
    if (activeTab === 'languages') {
      return <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
          {(tabContent.languages as Array<{
          name: string;
          flag: string;
          level: string;
          color: string;
        }>).map((language, index) => <div key={index} className="flex flex-col p-5 bg-warm-beige/50 rounded-lg border border-olive-grey/10 hover:border-olive-grey/20 transition-colors">
              <div className="flex items-center gap-3 mb-3">
                <span className="text-2xl">{language.flag}</span>
                <h3 className="font-semibold text-deep-espresso">
                  {language.name}
                </h3>
              </div>
              <span className={`inline-block px-3 py-1 rounded-full text-xs font-medium ${language.color} self-start`}>
                {language.level}
              </span>
            </div>)}
        </div>;
    }
    const items = tabContent[activeTab as keyof typeof tabContent] as Array<{
      year: string;
      title: string;
      organization?: string;
      provider?: string;
      university?: string;
    }>;
    const getThirdColumnLabel = () => {
      if (activeTab === 'experience') return 'Organization';
      if (activeTab === 'certifications') return 'Provider';
      return 'University';
    };
    const getSecondColumnLabel = () => {
      if (activeTab === 'experience') return 'Job Title';
      if (activeTab === 'certifications') return 'Certification / Course';
      return 'Degree';
    };
    return <div className="overflow-x-auto">
        <table className="w-full">
          <thead>
            <tr className="border-b border-olive-grey/20">
              <th className="text-left py-3 px-4 font-semibold text-deep-espresso">
                Year
              </th>
              <th className="text-left py-3 px-4 font-semibold text-deep-espresso">
                {getSecondColumnLabel()}
              </th>
              <th className="text-left py-3 px-4 font-semibold text-deep-espresso">
                {getThirdColumnLabel()}
              </th>
            </tr>
          </thead>
          <tbody>
            {items.map((item, index) => <tr key={index} className="border-b border-olive-grey/10">
                <td className="py-3 px-4 text-olive-grey">{item.year}</td>
                <td className="py-3 px-4">{item.title}</td>
                <td className="py-3 px-4">
                  {item.organization || item.provider || item.university}
                </td>
              </tr>)}
          </tbody>
        </table>
      </div>;
  };
  return <section id="capabilities" className="py-20 bg-light-beige">
      <div className="max-w-6xl mx-auto px-4">
        <div className="text-center mb-12">
          <h2 className="font-outfit text-3xl md:text-4xl font-bold text-deep-espresso mb-6">
            Capabilities
          </h2>
          <p className="text-deep-espresso/80 max-w-2xl mx-auto">
            A snapshot of the product skills and experience I bring to teams
            turning ideas into real products.
          </p>
        </div>
        <div className="flex flex-wrap justify-center gap-2 mb-10">
          {Object.keys(tabContent).map(tab => <button key={tab} onClick={() => setActiveTab(tab)} className={`px-6 py-2 rounded-full transition-colors capitalize ${activeTab === tab ? 'bg-soft-terracotta text-white' : 'bg-olive-grey/20 text-olive-grey hover:bg-olive-grey/30'}`}>
              {tab}
            </button>)}
        </div>
        <div className="bg-white rounded-card p-8 shadow-soft">
          {renderContent()}
        </div>
      </div>
    </section>;
}