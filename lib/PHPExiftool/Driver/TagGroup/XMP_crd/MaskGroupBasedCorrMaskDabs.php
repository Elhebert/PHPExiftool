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
class MaskGroupBasedCorrMaskDabs extends AbstractTagGroup
{

  protected string $id = 'XMP-crd:MaskGroupBasedCorrMaskDabs';

  protected string $name = 'MaskGroupBasedCorrMaskDabs';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crd
       * line : 399718
       * type : string
       * writable : true
       * count : 
       * flags : avoid,flattened,list,seq
       */
      'id' => 'XMP::crd.XMP-crd:MaskGroupBasedCorrMaskDabs',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2625;

}
