<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CaptureGammaEquation extends AbstractTagGroup
{

  protected string $id = 'MXF:CaptureGammaEquation';

  protected string $name = 'CaptureGammaEquation';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 167770
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:CaptureGammaEquation',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 167773
       * type : rational64s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:CaptureGammaEquation',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : MXF::Main
       * line : 169025
       * type : ?
       * writable : false
       * count : 
       * flags : unknown
       */
      'id' => 'MXF::Main.MXF:CaptureGammaEquation',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
