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
class ProgramLine extends AbstractTagGroup
{

  protected string $id = 'Pentax:ProgramLine';

  protected string $name = 'ProgramLine';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Program Line',
    'fr' => 'Ligne de programme',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::CameraSettings
       * line : 284818
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::CameraSettings.Pentax:ProgramLine',
      'desc' => [
        'en' => 'Program Line',
        'fr' => 'Ligne de programme',
      ],
    ],
  ];

}
