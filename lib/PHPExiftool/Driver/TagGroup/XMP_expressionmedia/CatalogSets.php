<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_expressionmedia;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CatalogSets extends AbstractTagGroup
{

  protected string $id = 'XMP-expressionmedia:CatalogSets';

  protected string $name = 'CatalogSets';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::ExpressionMedia
       * line : 396825
       * type : string
       * writable : true
       * count : 
       * flags : avoid,bag,list
       */
      'id' => 'XMP::ExpressionMedia.XMP-expressionmedia:CatalogSets',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2369;

}
