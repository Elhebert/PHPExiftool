<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Composite;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSLongitudeRef extends AbstractTagGroup
{

  protected string $id = 'Composite:GPSLongitudeRef';

  protected string $name = 'GPSLongitudeRef';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'GPS Longitude Ref',
    'fr' => 'Longitude est ou ouest',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Composite
       * line : 94829
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Composite.Composite:GPSLongitudeRef',
      'desc' => [
        'en' => 'GPS Longitude Ref',
        'fr' => 'Longitude est ou ouest',
      ],
    ],
  ];

}
