<?php

namespace App\Enums;

enum Religion: string
{
  case Islam = "Islam";
  case Protestan = "Kristen Protestan";
  case Katolik = "Kristen Katolik";
  case Hindu = "Hindu";
  case Buddha = "Buddha";
  case Konghucu = "Konghucu";

  public function label(): string
  {
    return match ($this) {
      self::Islam => "Islam",
      self::Protestan => "Kristen Protestan",
      self::Katolik => "Kristen Katolik",
      self::Hindu => "Hindu",
      self::Buddha => "Buddha",
      self::Konghucu => "Konghucu",
    };
  }
}