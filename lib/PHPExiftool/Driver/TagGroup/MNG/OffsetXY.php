<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OffsetXY extends AbstractTagGroup
{

  protected string $id = 'MNG:OffsetXY';

  protected string $name = 'OffsetXY';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : MNG::PasteImage
       * line : 165337
       * type : int32u
       * writable : false
       * count : 2
       * flags : 
       */
      'id' => 'MNG::PasteImage.MNG:OffsetXY',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 2;

}
