<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmpMM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ManifestReferenceLastModifyDate extends AbstractTagGroup
{

  protected string $id = 'XMP-xmpMM:ManifestReferenceLastModifyDate';

  protected string $name = 'ManifestReferenceLastModifyDate';

  protected ?string $phpType = 'date';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::xmpMM
       * line : 414118
       * type : date
       * writable : true
       * count : 
       * flags : flattened,list
       */
      'id' => 'XMP::xmpMM.XMP-xmpMM:ManifestReferenceLastModifyDate',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2112;

}
