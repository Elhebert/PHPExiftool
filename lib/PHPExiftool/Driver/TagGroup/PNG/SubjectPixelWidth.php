<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SubjectPixelWidth extends AbstractTagGroup
{

  protected string $id = 'PNG:SubjectPixelWidth';

  protected string $name = 'SubjectPixelWidth';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : PNG::SubjectScale
       * line : 272787
       * type : var_string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PNG::SubjectScale.PNG:SubjectPixelWidth',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
