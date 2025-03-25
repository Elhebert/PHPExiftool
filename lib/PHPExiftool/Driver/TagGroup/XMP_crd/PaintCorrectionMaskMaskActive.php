<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_crd;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PaintCorrectionMaskMaskActive extends AbstractTagGroup
{

  protected string $id = 'XMP-crd:PaintCorrectionMaskMaskActive';

  protected string $name = 'PaintCorrectionMaskMaskActive';

  protected ?string $phpType = 'boolean';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crd
       * line : 400216
       * type : boolean
       * writable : true
       * count : 
       * flags : avoid,flattened
       */
      'id' => 'XMP::crd.XMP-crd:PaintCorrectionMaskMaskActive',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2049;

}
