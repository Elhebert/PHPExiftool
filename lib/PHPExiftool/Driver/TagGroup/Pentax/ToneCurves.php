<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ToneCurves extends AbstractTagGroup
{

  protected string $id = 'Pentax:ToneCurves';

  protected string $name = 'ToneCurves';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Tone Curves',
    'fr' => 'Courbes de ton',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::Main
       * line : 301272
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::Main.Pentax:ToneCurves',
      'desc' => [
        'en' => 'Tone Curves',
        'fr' => 'Courbes de ton',
      ],
    ],
  ];

}
