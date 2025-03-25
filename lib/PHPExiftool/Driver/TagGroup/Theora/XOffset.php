<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Theora;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class XOffset extends AbstractTagGroup
{

  protected string $id = 'Theora:XOffset';

  protected string $name = 'XOffset';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Theora::Identification
       * line : 394833
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Theora::Identification.Theora:XOffset',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
