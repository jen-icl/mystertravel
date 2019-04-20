import React, {Component} from 'react';
import axios from 'axios';
import './about_us.scss';
import AboutContact from './about_contact';

class AboutUs extends Component {
    constructor(props){
        super(props)

        this.data =[
        {
            name:"Jennifer Lai",
            email: "iclai.work@gmail.com",
            linkedin:"jen-icl",
            portfolio:"jen-icl.com",
            git: "jen-icl",
            image:"jen.jpg"
        },
        {
            name:"Kylie Chao",
            email: "kylieclin@gmail.com",
            linkedin:"kyliechao",
            portfolio:"kyliechao.com",
            git: "kylieclin",
            image:"kylie.jpg"
        },
        {
            name:"Quanye West",
            email: "quandhle@gmail.com",
            linkedin:"quandhle",
            portfolio:"quandhle.com",
            git: "quandhle",
            image:"quan.jpg"
        },
        {
            name:"Westley Poon",
            email: "westleypoon@gmail.com",
            linkedin:"westley-poon",
            portfolio:"westleypoon.com",
            git: "WestleyPoon",
            image:"west.jpg"
        },
        ]

    }
    render() {
        const aboutUs = this.data.map((person) => {
            return (
                <div key={person.name} className="about-person">
                    <AboutContact person={person} />
                </div>
            )
        });

        return (
            <div className="about-container">
                {aboutUs}
            </div>
        )
    }
}

export default AboutUs;