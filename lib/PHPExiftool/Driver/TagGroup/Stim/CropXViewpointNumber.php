<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Stim;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CropXViewpointNumber extends AbstractTagGroup
{

  protected string $id = 'Stim:CropXViewpointNumber';

  protected string $name = 'CropXViewpointNumber';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Stim::CropX
       * line : 394518
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Stim::CropX.Stim:CropXViewpointNumber',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
