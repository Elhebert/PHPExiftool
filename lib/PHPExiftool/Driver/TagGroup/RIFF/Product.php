<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Product extends AbstractTagGroup
{

  protected string $id = 'RIFF:Product';

  protected string $name = 'Product';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::Info
       * line : 328356
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::Info.RIFF:Product',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : RIFF::Sampler
       * line : 328699
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::Sampler.RIFF:Product',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
