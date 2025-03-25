<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\OpenEXR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WorldToCamera extends AbstractTagGroup
{

  protected string $id = 'OpenEXR:WorldToCamera';

  protected string $name = 'WorldToCamera';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : OpenEXR::Main
       * line : 263704
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'OpenEXR::Main.OpenEXR:WorldToCamera',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
