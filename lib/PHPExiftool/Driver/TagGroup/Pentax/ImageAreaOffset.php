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
class ImageAreaOffset extends AbstractTagGroup
{

  protected string $id = 'Pentax:ImageAreaOffset';

  protected string $name = 'ImageAreaOffset';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::Main
       * line : 299400
       * type : int16u
       * writable : true
       * count : 2
       * flags : permanent
       */
      'id' => 'Pentax::Main.Pentax:ImageAreaOffset',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 2;

  protected int $flags = 2052;

}
