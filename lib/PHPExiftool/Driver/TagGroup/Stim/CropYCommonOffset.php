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
class CropYCommonOffset extends AbstractTagGroup
{

  protected string $id = 'Stim:CropYCommonOffset';

  protected string $name = 'CropYCommonOffset';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Stim::CropY
       * line : 394539
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Stim::CropY.Stim:CropYCommonOffset',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
