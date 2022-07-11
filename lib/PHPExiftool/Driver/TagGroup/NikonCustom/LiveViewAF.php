<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LiveViewAF extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:LiveViewAF';

  protected string $name = 'LiveViewAF';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Live View AF',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD5000
       * line : 222951
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5000.NikonCustom:LiveViewAF',
      'desc' => [
        'en' => 'Live View AF',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD90
       * line : 235426
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD90.NikonCustom:LiveViewAF',
      'desc' => [
        'en' => 'Live View AF',
      ],
    ],
  ];

}
