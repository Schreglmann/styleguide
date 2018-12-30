# Styleguide – musicr.io
Song Recognition Web App
by Georg Schreglmann and Niklas Noldin

## Introduction

Musicr is an online content recognition application which provides several data-sets like lyrics, spotify actions and social media integration. Just like it's more famous counterparts Shazam, Soundhound and Genius it will use an API to fingerprint audio files and recognise the song from a variety of pieces.  
The design is based on the concept of soundwaves and its similarity to waves in the ocean.

## Colors

Just like the colors in the ocean our app is based around blue and turquoise tones with white as a secondary color. Furthermore the similarity is enhanced with the use of gradients.

### Main Colors

Primary Color: #051535
Secondary Color: #ffffff
Accent Color: #002255

### Gradient

The gradient is used as background of several elements and is as well used in the main background of the app

```css
element{
    background: linear-gradient(
      20deg,
      #051535,
      #002255
      )
}
```

### Main Background

The main background is the primary backdrop of the homescreen. It uses the keyvisual of the app, the wave, as an overlay to the gradient.

```css
element{
    background: 
    no-repeat center/cover url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 2717.4 1905.8'%3E%3Cg data-name='Ebene 2'%3E%3Cpath fill='none' stroke='%23182fc4' stroke-miterlimit='10' stroke-width='400' d='M2517.4 1905.8V586.2a386.2 386.2 0 1 0-772.5 0V1143a386.2 386.2 0 1 1-772.4 0V1013a386.2 386.2 0 1 0-772.5 0v892.8' opacity='.05'/%3E%3C/g%3E%3C/svg%3E"),
    linear-gradient(
      20deg,
      #051535,
      #002255
      );  
}
```

## Logo 

The Logo consists of a customly created Text Component which represents the waves of sound.

![Logo with Slogan](./logo.svg)

### Colors

The logo must be used either in the primary or secondary color on a plain white background or in the accent color on a dark blue background.
It must not be used in any other application.

### Spacing

The logo's complete height can be viewen as 1 unit.
The logo must always have a minimum of 1 unit blank space to the next design element or the borders of the medium.

![Spacing](./spacing.svg)

### Rotation

The logo must only be placed horizontal and may not be rotated.

### Dos

![Positiv-Beispiel](./top_1.png)
![Positiv-Beispiel](./top_2.png)


### Don'ts
![Negativ-Beispiel](./fail_3.svg)
![Negativ-Beispiel](./fail_2.svg)
![Negativ-Beispiel](./fail_1.svg)

## Typography

